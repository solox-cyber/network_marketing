<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $contactCount = Contact::count();
        $userCount = User::count();

        // Retrieve the authenticated user
        $user = Auth::user();

        $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
        $userCountDate = User::where('created_at', '>', $user->created_at)->count();

        $totalCount = $contactCountDate + $userCountDate;

        return view('dashboard', compact('contactCount', 'userCount', 'totalCount'));
    }

    public function showEmail()
    {
        return view('changeEmail');
    }

    public function resetstore(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password),
                    'remember_token' => null,
                ])->save();

                // You can perform additional actions here if needed, such as logging the user in automatically

                // Return a response indicating the password was successfully reset
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Email updated successfully.');
    }

    public function profile()
    {
        return view('overview');
    }

    public function setting()
    {
        return view('settings');
    }

    public function AddContact()
    {
        $user = Auth::user();
        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('add-contact', compact('contacts'), compact('count'));
    }

    public function EditContact(Contact $contact)
    {
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
        // Retrieve the authenticated user
        $user = Auth::user();
        $count = $user->contacts()->count();
        $contacts = $user->contacts;
        $contact = Contact::findOrFail($id);
        return view('view-contact', compact('contact', 'contacts'), compact('count'));
    }




    public function contact()
    {
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

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'notes' => 'nullable',
            'city' => 'required',
            'country' => 'required',
            'password' => 'nullable',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        // Create a new contact instance
        $contact = new Contact();
        $user = Auth::user();
        // Set the contact attributes
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone_number');
        $contact->notes = $request->input('notes');
        $contact->city = $request->input('city');
        $contact->country = $request->input('country');
        $contact->user_id = $user->id;
        $contact->password = bcrypt(Str::random(8)); // Encrypt the password
        // Optionally, you can set a serial number based on the user's ID
        $contact->serial_number = 'SN' . $user->id . '-' . $contact->id;

        // Associate the contact with the authenticated user

        $user->contacts()->save($contact);

        // Add profile picture if provided
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/profile_pictures');

            // Create a new profile picture record
            $profilePicture = new ProfilePicture();
            $profilePicture->path = $path;

            // Save the profile picture relationship
            $contact->profilePicture()->save($profilePicture);
        }

        return redirect()->back()->with('success', 'Contact created successfully.');
    }

    public function ContactDestroy(Contact $contact)
    {
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
