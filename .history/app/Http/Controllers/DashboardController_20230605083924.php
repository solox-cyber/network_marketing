<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\WalletStatement;

class DashboardController extends Controller
{
    //
    use ResetsPasswords;

    protected $redirectTo = '/dashboard';
    public function index()
    {


        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                // Retrieve the authenticated user
                $user = Auth::user();


                $contactCount = $user->contacts()->count();

                $userCount = User::count();


                // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
                $userCountDate = User::where('created_at', '>', $user->created_at)->count();

                $totalCount = $userCountDate;

                // Assuming you have a variable $value that represents the user's value


                $sequence = [4, 16, 64, 256];
                $level = 0;

                foreach ($sequence as $number) {
                    if ($totalCount >= $number) {
                        $level++;
                    } else {
                        break; // No need to continue checking the rest of the sequence
                    }
                }
                if ($level == 0 && $totalCount < 4) {
                    $pay = 0;
                    $commissionPercentage = 0;
                } elseif ($level == 1 && $totalCount == 4) {
                    $pay = 100000 * $totalCount;
                    $commissionPercentage = 10;
                } elseif ($level == 1 || $totalCount >= 5 && $totalCount <= 15) {
                    $pay = 100000 * 4;
                    $commissionPercentage = 10;
                } elseif ($level == 2 && $totalCount == 16) {
                    $pay = 100000 * $totalCount;
                    $commissionPercentage = 8;
                } elseif ($level == 2 || $totalCount >= 17 && $totalCount <= 63) {
                    $pay = 100000 * 16;
                    $commissionPercentage = 8;
                } elseif ($level == 3 && $totalCount == 64) {
                    $pay = 100000 * $totalCount;
                    $commissionPercentage = 6;
                } elseif ($level >= 3 || $totalCount >= 65 && $totalCount <= 255) {
                    $pay = 100000 * $totalCount;
                    $commissionPercentage = 6;
                } elseif ($level == 4 && $totalCount == 256) {
                    $pay = 100000 * $totalCount;
                    $commissionPercentage = 4;
                }

                $WalletAmountGross = $pay * ($commissionPercentage / 100);

                // Get the total withdraw request count
                $totalWithdrawRequests = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();

                $paymentStatus = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')
                    ->where('payment_status', 'approved')
                    ->sum('amount');

                // Check if the payment status is verified
                if ($paymentStatus > 0) {
                    $WalletAmount = $WalletAmountGross - $paymentStatus;
                } else {
                    $WalletAmount = $WalletAmountGross;
                }


                $user->level = $level;
                $user->wallet_amount = $WalletAmount;
                $user->commission_status = 'pending';
                $user->commission_percentage = $commissionPercentage;
                $user->save();


                //Retrieve User Service from Database
                $service = $user->service;
                $serial_number = $user->serial_number;
                return view('dashboard', compact('contactCount', 'userCount', 'totalCount', 'WalletAmount', 'commissionPercentage', 'level', 'service', 'serial_number'));
            } elseif ($usertype == 'admin') {
                return view('admindash');
            } else {
                return redirect()->back();
            }
        }
    }

    public function showEmail()
    {
        return view('changeEmail');
    }

    public function userlist()
    {
      



            // Check if the authenticated user is an admin
    if (auth()->user()->usertype === 'admin') {
        $contacts = User::all(); // Fetch all contacts from the database
        // User is an admin, allow access to the userlist view
        // Assuming $contact->created_at is a valid DateTime instance or string representation
        $formattedCreatedAt = Carbon::parse($contacts->created_at)->format('d M Y, h:i a');
        return view('admin.users-list',compact('contacts,formattedCreatedAt'));
    }

    // User is not an admin, redirect or show an error message
    return redirect()->back()->with('error', 'You do not have permission to access this page.');


    }

    public function passwordReset(Request $request, $token = null)
    {

        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        return view('resetpass', ['token' => $token, 'email' => $user->email]);
    }

    public function passwordStore(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        $resetPasswordStatus = $this->broker()->reset(
            ['email' => $user->email, 'password' => $request->password, 'password_confirmation' => $request->password_confirmation],
            function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        if ($resetPasswordStatus == Password::PASSWORD_RESET) {
            return redirect()->route('dashboard')->with('status', trans($resetPasswordStatus));
        } else {
            return back()->withErrors(['password' => trans($resetPasswordStatus)]);
        }
    }

    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();
        // You can perform any additional actions after the password reset if needed
    }

    protected function broker()
    {
        return Password::broker();
    }



    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Email updated successfully.');
    }

    public function profile()
    {
        return view('overview');
    }

    public function payoutGate(Request $request)
    {
        // Retrieve the authenticated user
        // $user = Auth::user();

        $user = Auth::user();

        // Get the amount from the request
        $amount = $request->input('amount');

        // Create a new WalletStatement instance
        $walletStatement = new WalletStatement();

        // Set the values for the columns
        $walletStatement->user_id = $user->id;
        $walletStatement->amount = $amount;
        $walletStatement->type = 'withdrawal'; // Enclose in single quotes to treat as a string
        $walletStatement->created_at = now();

        // Save the entry to the database
        $walletStatement->save();

        // Redirect to the dashboard or return a response
        return redirect()->route('statement')->with('success', 'Withdrawal recorded successfully.');
    }
    public function statement()
    {
        $contactCount = Contact::count();
        $userCount = User::count();


        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
        $userCountDate = User::where('created_at', '>', $user->created_at)->count();

        $totalCount = $userCountDate;

        // Assuming you have a variable $value that represents the user's value


        $sequence = [4, 16, 64, 256];
        $level = 0;

        foreach ($sequence as $number) {
            if ($totalCount >= $number) {
                $level++;
            } else {
                break; // No need to continue checking the rest of the sequence
            }
        }
        if ($level == 0 && $totalCount < 4) {
            $pay = 0;
            $commissionPercentage = 0;
        } elseif ($level == 1 && $totalCount == 4) {
            $pay = 100000 * $totalCount;
            $commissionPercentage = 10;
        } elseif ($level == 1 || $totalCount >= 5 && $totalCount <= 15) {
            $pay = 100000 * 4;
            $commissionPercentage = 10;
        } elseif ($level == 2 && $totalCount == 16) {
            $pay = 100000 * $totalCount;
            $commissionPercentage = 8;
        } elseif ($level == 2 || $totalCount >= 17 && $totalCount <= 63) {
            $pay = 100000 * 16;
            $commissionPercentage = 8;
        } elseif ($level == 3 && $totalCount == 64) {
            $pay = 100000 * $totalCount;
            $commissionPercentage = 6;
        } elseif ($level >= 3 || $totalCount >= 65 && $totalCount <= 255) {
            $pay = 100000 * $totalCount;
            $commissionPercentage = 6;
        } elseif ($level == 4 && $totalCount == 256) {
            $pay = 100000 * $totalCount;
            $commissionPercentage = 4;
        }

        $WalletAmountGross = $pay * ($commissionPercentage / 100);
        $user = Auth::user();
        $balance = $user->wallet_amount;

        $statements = WalletStatement::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('statement', compact('statements', 'WalletAmountGross', 'balance'));
    }

    public function payout()
    {
        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();
        $email =   $user->email;
        $walletAmount = $user->wallet_amount;
        return view('withdraw', compact('email', 'walletAmount'));
    }

    public function setting()
    {
        return view('settings');
    }

    public function AddContact()
    {
        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();
        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('add-contact', compact('contacts'), compact('count'));
    }

    public function EditContact(Contact $contact)
    {

        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the contact belongs to the authenticated user
        if ($contact->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You do not have permission to edit this contact.');
        }
        //     // Retrieve the contact details based on the provided ID
        //   $contact = Contact::find($contact);

        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('edit-contact', compact('contact', 'contacts'), compact('count'));
    }


    public function ShowContact($id)
    {

        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        $count = $user->contacts()->count();
        $contacts = $user->contacts;
        $contact = Contact::findOrFail($id);
        return view('view-contact', compact('contact', 'contacts'), compact('count'));
    }




    public function contact()
    {
        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();
        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('contacts', compact('contacts'), compact('count'));
    }

    // public function contacts()
    // {
    //     $contacts = Contact::all();
    //     return view('contacts_methods.search',compact('contacts'));
    // }

    public function search(Request $request)
    {
        $searchKeyword = $request->input('search');

        // Perform the search query based on your requirements
        $contacts = Contact::where('name', 'like', "%$searchKeyword%")->get();

        // You can also include additional logic or filters based on your needs

        // Prepare the search results as an array
        $searchResults = [];
        foreach ($contacts as $contact) {
            $searchResults[] = [
                'name' => $contact->name,
                'link' => route('contacts.show', ['contact' => $contact->id]),
                'editLink' => route('edit_contact', ['contact' => $contact->id]),
            ];
        }

        return response()->json($searchResults);
    }


    public function multistore(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        $names = $request->input('name');
        $phoneNumbers = $request->input('phone_number');

        $user = Auth::user();

        // Iterate over the arrays and save the contacts to the database
        for ($i = 0; $i < count($names); $i++) {
            // Create a new instance of the Contact model
            $contact = new Contact();

            $contact->name = $names[$i];
            $contact->phone = $phoneNumbers[$i];
            $contact->user_id = $user->id;
            $contact->password = bcrypt(Str::random(8)); // Encrypt the password
            // Optionally, you can set a serial number based on the user's ID
            $contact->serial_number = 'SN' . $user->id . '-' . $contact->id;
            $user->contacts()->save($contact);
        }

        // Redirect or perform other actions after saving the contacts
        return redirect()->back()->with('success', 'Contacts added successfully!');
    }


    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
        ]);



        // Create a new contact instance
        $contact = new Contact();

        // Retrieve the authenticated user
        $user = Auth::user();
        // Set the contact attributes
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone_number');
        $contact->user_id = $user->id;
        $contact->password = bcrypt(Str::random(8)); // Encrypt the password
        // Optionally, you can set a serial number based on the user's ID
        $contact->serial_number = 'SN' . $user->id . '-' . $contact->id;

        // Associate the contact with the authenticated user

        $user->contacts()->save($contact);

        // Add profile picture if provided
        // if ($request->hasFile('profile_picture')) {
        //     $path = $request->file('profile_picture')->store('public/profile_pictures');

        //     // Create a new profile picture record
        //     $profilePicture = new ProfilePicture();
        //     $profilePicture->path = $path;

        //     // Save the profile picture relationship
        //     $contact->profilePicture()->save($profilePicture);
        // }

        return redirect()->back()->withInput()->with('success', 'Contact created successfully.');
    }

    public function ContactDestroy(Contact $contact)
    {
        // Retrieve the authenticated user
        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the contact belongs to the authenticated user
        if ($contact->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You do not have permission to delete this contact.');
        }

        // Delete the profile picture if it exists
        if ($contact->profilePicture) {
            Storage::delete($contact->profilePicture->path);
            $contact->profilePicture->delete();
        }

        // Delete the contact
        $contact->delete();

        return redirect()->route('contact')->with('success', 'Contact deleted successfully.');
    }



    public function logout()
    {
        Auth::logout(); // Log out the authenticated user

        // Perform any additional actions if needed

        return redirect('/login'); // Redirect the user to the login page after logout
    }

    public function deactivateAccount(Request $request)
    {
        // Retrieve the authenticated user
        // $user = Auth::user();
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the confirmation checkbox is checked
        if (!$request->has('deactivate')) {
            return redirect()->back()->with('error', 'Please confirm the account deactivation.');
        }

        // Mark the user as deactivated
        $user->deactivated_at = now();
        $user->save();

        // Optionally, log the user out
        Auth::logout();

        // Redirect to the desired page or show a success message
        return redirect()->route('login')->with('success', 'Your account has been deactivated.');
    }
}
