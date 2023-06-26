<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\Course;
use App\Models\SalesRep;
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
use Maatwebsite\Excel\Facades\Excel;

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

                // retrieve the course details of the user
                $course = $user->service;
                $courseDetails = Course::where('id', $course)->get();

                // foreach ($courseDetails as $course) {
                // $course_logo = $course->course_logo;
                // $course_name = $course->course_name;
                // $about_course = $course->about_course;
                // $profile_picture = $course->profilePicture;
                // $course_syllabus = $course->course_syllabus;
                // }



                $contactCount = $user->contacts()->count();

                $userCount = User::where('usertype', 'user')->count();

                $course = $user->created_at;



                // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();


                $totalCount = User::where('usertype', 'user')
                    ->where('id', '>', $user->id)
                    ->count();

                // $totalCount = $userCountDate;

                // Assuming you have a variable $value that represents the user's value


                // $sequence = [4, 16, 64, 256, 1024, 4096, 16384, 65536];
                $level = 0;


                $N = Auth::id();
                // $level = 0;
                // $commissionPercentage = 0;
                $pay = 100000;

                if ($totalCount == 0 && $totalCount < ($N * 4 + 1)) {
                    $level = 0;
                    $commissionPercentage = 0;
                    $WalletAmountGross = $pay * ($commissionPercentage / 100);
                } elseif ($totalCount >= ($N * 4 + 1) && $totalCount < ($N * 16 + 5)) {
                    $level = 1;
                    $commissionPercentage = 10;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 4;
                } elseif ($totalCount >= ($N * 16 + 5) && $totalCount < ($N * 64 + 21)) {
                    $level = 2;
                    $commissionPercentage = 8;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 16;
                } elseif ($totalCount >= ($N * 64 + 21) && $totalCount < ($N * 256 + 85)) {
                    $level = 3;
                    $commissionPercentage = 6;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 64;
                } elseif ($totalCount >= ($N * 256 + 85)) {
                    $level = 4;
                    $commissionPercentage = 4;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 256;
                }




                // Get the total withdraw request count
                $totalWithdrawRequests = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();

                $paymentStatus = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')
                    ->where('payment_status', 'Paid')
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



                return view('dashboard', compact('courseDetails', 'contactCount', 'course', 'userCount', 'totalCount', 'WalletAmount', 'commissionPercentage', 'level', 'service', 'serial_number'));
            } elseif ($usertype == 'admin') {
                $totalUsers = User::where('usertype', 'user')->count();
                $totalContacts = Contact::count();
                $totalSalesReps = SalesRep::count();

                // Pass the chart data and total counts to the view
                return view('admindash', compact('totalUsers', 'totalContacts', 'totalSalesReps'));
            } elseif ($usertype == 'subadmin') {
                $totalUsers = User::where('usertype', 'user')->count();
                $totalContacts = Contact::count();
                $totalSalesReps = SalesRep::count();

                // Pass the chart data and total counts to the view
                return view('admindash', compact('totalUsers', 'totalContacts', 'totalSalesReps'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function importUsers()
    {
        Excel::import(new UsersImport, request()->file('file'));
        return redirect()->back();
    }

    public function admindelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Admin User deleted successfully.');
    }

    public function adminlist()
    {
        $users = User::where('usertype', 'subadmin')->paginate(10); // Change 10 to the desired number of users per page
        return view('admin.admin-list', compact('users'));
    }


    public function admincreate()
    {
        return view('admin.admin-create');
    }



    public function adminstore(Request $request)
    {
        try {
            // Validate the form input
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Create a new admin user
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            // Update the user's usertype to "admin"
            $user->usertype = 'subadmin';
            $user->save();

            // Redirect to the admin list page or any other appropriate page
            return redirect()->route('admin.list')->with('success', 'Admin created successfully.');
        } catch (\Exception $e) {
            // Handle the exception and return an error message
            return redirect()->back()->withErrors(['error' => 'An error occurred. Please try again later.']);
        }
    }



    public function status_paid($id)
    {
        $walletStatement = WalletStatement::findOrFail($id);
        $walletStatement->payment_status = 'Paid';
        $walletStatement->save();

        return redirect()->back()->with('success', 'Payment status updated successfully.');
    }

    public function status_decline($id)
    {
        $walletStatement = WalletStatement::findOrFail($id);
        $walletStatement->payment_status = 'Decline';
        $walletStatement->save();

        return redirect()->back()->with('success', 'Payment status updated successfully.');
    }

    public function status_inprogress($id)
    {
        $walletStatement = WalletStatement::findOrFail($id);
        $walletStatement->payment_status = 'In Progress';
        $walletStatement->save();

        return redirect()->back()->with('success', 'Payment status updated successfully.');
    }

    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function commission($id)
    {

        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {

            if (Auth::id()) {
                $usertype = Auth::user()->usertype;


                $user = Auth::user();


                // retrieve the course details of the user
                $course = $user->service;
                $courseDetails = Course::where('id', $course)->get();

                foreach ($courseDetails as $course) {
                    // $course_logo = $course->course_logo;
                    $course_name = $course->course_name;
                    $about_course = $course->about_course;
                    // $course_syllabus = $course->course_syllabus;
                }



                $contactCount = $user->contacts()->count();

                $userCount = User::where('usertype', 'user')->count();

                $course = $user->created_at;



                // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();


                $totalCount = User::where('usertype', 'user')
                    ->where('id', '>', $user->id)
                    ->count();

                // $totalCount = $userCountDate;

                // Assuming you have a variable $value that represents the user's value


                // $sequence = [4, 16, 64, 256, 1024, 4096, 16384, 65536];
                $level = 0;


                $N = Auth::id();
                // $level = 0;
                // $commissionPercentage = 0;
                $pay = 100000;

                if ($totalCount == 0 && $totalCount < ($N * 4 + 1)) {
                    $level = 0;
                    $commissionPercentage = 0;
                    $WalletAmountGross = $pay * ($commissionPercentage / 100);
                } elseif ($totalCount >= ($N * 4 + 1) && $totalCount < ($N * 16 + 5)) {
                    $level = 1;
                    $commissionPercentage = 10;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 4;
                } elseif ($totalCount >= ($N * 16 + 5) && $totalCount < ($N * 64 + 21)) {
                    $level = 2;
                    $commissionPercentage = 8;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 16;
                } elseif ($totalCount >= ($N * 64 + 21) && $totalCount < ($N * 256 + 85)) {
                    $level = 3;
                    $commissionPercentage = 6;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 64;
                } elseif ($totalCount >= ($N * 256 + 85)) {
                    $level = 4;
                    $commissionPercentage = 4;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 256;
                }




                // Get the total withdraw request count
                $totalWithdrawRequests = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();

                $paymentStatus = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')
                    ->where('payment_status', 'Paid')
                    ->sum('amount');

                // Check if the payment status is verified
                if ($paymentStatus > 0) {
                    $WalletAmount = $WalletAmountGross - $paymentStatus;
                } else {
                    $WalletAmount = $WalletAmountGross;
                }
            }

            $walletStatement = WalletStatement::find($id);
            $user = $walletStatement->user;
            return view('admin.commission', ['walletStatement' => $walletStatement, 'user' => $user], compact('WalletAmount', 'WalletAmountGross'));
        }

        // User is not an admin, redirect or show an error message
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }

    public function commissions()
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {

            if (Auth::id()) {
                $usertype = Auth::user()->usertype;


                $user = Auth::user();


                $contactCount = $user->contacts()->count();

                $userCount = User::count();


                // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
                $userCountDate = User::where('created_at', '>', $user->created_at)->count();

                $totalCount = $userCountDate;

                // Assuming you have a variable $value that represents the user's value


                $sequence = [4, 16, 64, 256, 1024, 4096, 16384, 65536];
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
                    ->where('payment_status', 'Paid')
                    ->sum('amount');

                // Check if the payment status is verified
                if ($paymentStatus > 0) {
                    $WalletAmount = $WalletAmountGross - $paymentStatus;
                } else {
                    $WalletAmount = $WalletAmountGross;
                }
            }


            $walletStatements = WalletStatement::with('user')->paginate(10);
            return view('admin.commission-list', ['walletStatements' => $walletStatements], compact('WalletAmount', 'WalletAmountGross'));
        }

        // User is not an admin, redirect or show an error message
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }


    public function CourseDestroy($id)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            try {
                $course = Course::findOrFail($id);
                $course->delete();
                return redirect()->route('course.list')->with('success', 'Course deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'An error occurred. Please try again later.']);
            }
        }
    }


    public function salesDestroy($id)
    {
        // Find the sales rep by ID
        $salesRep = SalesRep::findOrFail($id);

        // Delete the sales rep
        $salesRep->delete();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Sales rep deleted successfully');
    }

    public function salesView()
{
    $salesReps = User::where('usertype', 'salesrep')->paginate(10); // Change the page size (10) as per your requirement

    foreach ($salesReps as $salesRep) {
        $assignedContactsCount = Contact::where('sales_rep_id', $salesRep->id)->count();
        $salesRep->assignedContactsCount = $assignedContactsCount;
    }

    return view('admin.salesrep-list', compact('salesReps'));
}



    public function assignContact(Request $request, $salesRepId, $contactId)
    {
        // Validate the request data
        $request->validate([
            'contact_id' => 'required|exists:contacts,id',
        ]);


        // Find the contact and update the sales_rep_id
        $contact = Contact::find($contactId);
        $contact->sales_rep_id = $salesRepId;
        $contact->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Contact assigned successfully');
    }

    public function allCourses()
    {

        $courses = Course::paginate(10);

        return view('courses', compact('courses'));
    }

    public function Coursedetails($id)
    {
        $course = Course::findOrFail($id); // Retrieve the course based on the ID

        return view('coursedetails', compact('course')); // Pass the course data to the view
    }


    public function myCourses()
    {
        $user = Auth::user();

        $course = $user->service;
        $courses = Course::where('id', $course)->paginate(10);

        return view('mycourses', compact('courses')); // Pass the courses data to the view
    }


    public function salessearch(Request $request)
    {
        $searchKeywords = $request->input('search');

        // Perform the search query using the search keywords
        $contacts = Contact::where('name', 'LIKE', "%{$searchKeywords}%")->get();

        // Return the search results as JSON response
        return response()->json($contacts);
    }

    // public function courseShow($id)
    // {
    //     if (auth()->user()->usertype === 'admin') {
    //         $salesReps = SalesRep::all();
    //         $salesRep = SalesRep::findOrFail($id);
    //         $numberOfContacts = $salesRep->contacts()->count();
    //         $salescontacts = $salesRep->contacts()->get();
    //         $contacts = Contact::all();
    //         return view('admin.course-edit', compact('salesRep', 'salesReps', 'numberOfContacts', 'salescontacts', 'contacts'));
    //     }
    // }

    public function courseShow($id)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            $courses = Course::findOrFail($id);
            return view('admin.course-edit', compact('courses'));
        }
    }

    public function salesShow($id)
    {
        $salesReps = User::where('usertype', 'salesrep')->get();
        $salesRep = User::findOrFail($id);
        $numberOfContacts = $salesRep->contacts()->count();
        $salescontacts = $salesRep->contacts()->get();
        $contacts = Contact::all();
        return view('admin.salesrep', compact('salesRep', 'salesReps', 'numberOfContacts', 'salescontacts', 'contacts'));
    }
    public function salesStore(Request $request)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'country' => 'required',
            ]);

            // Add a default password value
            $validatedData['password'] = bcrypt('password');

            $user = User::create($validatedData);

            // Update the user's usertype to "salesrep"
            $user->usertype = 'salesrep';
            $user->save();
            // Redirect or perform any other actions after storing the sales representative

            return redirect()->route('admin.salesrep')->with('success', 'Sales representative created successfully');
        }
    }

    public function salesAdd()
    {
        return view('admin.add-salesrep');
    }

    public function showEmail()
    {
        return view('changeEmail');
    }

    public function userview($id)
    {
        // Retrieve the user from the database based on the provided ID
        $user = User::find($id);

        // retrieve the course details of the user
        $course = $user->service;
        $courseDetails = Course::where('id', $course)->get();

        foreach ($courseDetails as $course) {

            $course_name = $course->course_name;
        }
        return view('admin.users-view', compact('user', 'course_name'));
    }



    public function userlist()
    {

        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            $contacts = User::where('usertype', 'user')->orWhere('usertype', 'deactivated')->paginate(10);;

            // Retrieve the course details for each user
            $courseDetails = [];

            foreach ($contacts as $user) {
                $sales = $user->sales_rep_id;
                $salesDetails[$user->id] = SalesRep::where('id', $sales)->first();

                // Retrieve the salesrep name if sales details exist
                $salesRepName = $salesDetails[$user->id] ? $salesDetails[$user->id]->name : null;
                $salesDetails[$user->id]['name'] = $salesRepName;


                $course = $user->service;
                $courseDetails[$user->id] = Course::where('id', $course)->first();

                // Retrieve the course name if course details exist
                $courseName = $courseDetails[$user->id] ? $courseDetails[$user->id]->course_name : null;
                $courseDetails[$user->id]['course_name'] = $courseName;
            }

            return view('admin.users-list', compact('contacts', 'courseDetails', 'salesDetails'));
        }




        // User is not an admin, redirect or show an error message
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }

    public function filterContacts(Request $request)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {

            $linkedToSalesRep = $request->input('linked_to_sales_rep');

            // Perform the filter query for contacts
            $contacts = Contact::when($linkedToSalesRep, function ($query, $linkedToSalesRep) {
                if ($linkedToSalesRep === 'Assigned') {
                    $query->whereNotNull('sales_rep_id');
                } elseif ($linkedToSalesRep === 'NAssigned') {
                    $query->whereNull('sales_rep_id');
                }
            })->get();

            $salesReps = SalesRep::all();

            return view('admin.filtersearchcontacts', compact('contacts', 'salesReps'));
        }
    }

    public function filterUsers(Request $request)
    {

        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {

            $contacts = User::where('usertype', 'user')->orWhere('usertype', 'deactivated')->get();

            // Retrieve the course details for each user
            $courseDetails = [];

            foreach ($contacts as $user) {
                $sales = $user->sales_rep_id;
                $salesDetails[$user->id] = SalesRep::where('id', $sales)->first();

                // Retrieve the salesrep name if sales details exist
                $salesRepName = $salesDetails[$user->id] ? $salesDetails[$user->id]->name : null;
                $salesDetails[$user->id]['name'] = $salesRepName;


                $course = $user->service;
                $courseDetails[$user->id] = Course::where('id', $course)->first();

                // Retrieve the course name if course details exist
                $courseName = $courseDetails[$user->id] ? $courseDetails[$user->id]->course_name : null;
                $courseDetails[$user->id]['course_name'] = $courseName;
            }


            $paymentStatus = $request->input('payment_status');

            $query = User::query();

            if ($paymentStatus) {
                $query->where('payment_status', $paymentStatus);
            }

            $query->where('usertype', 'user');

            $users = $query->paginate(10);

            return view('admin.search-results', compact('users', 'courseDetails', 'salesDetails'));
        }
    }
    public function searchUsers(Request $request)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {

            $contacts = User::where('usertype', 'user')->orWhere('usertype', 'deactivated')->get();

            // Retrieve the course details for each user
            $courseDetails = [];

            foreach ($contacts as $user) {
                $sales = $user->sales_rep_id;
                $salesDetails[$user->id] = SalesRep::where('id', $sales)->first();

                // Retrieve the salesrep name if sales details exist
                $salesRepName = $salesDetails[$user->id] ? $salesDetails[$user->id]->name : null;
                $salesDetails[$user->id]['name'] = $salesRepName;


                $course = $user->service;
                $courseDetails[$user->id] = Course::where('id', $course)->first();

                // Retrieve the course name if course details exist
                $courseName = $courseDetails[$user->id] ? $courseDetails[$user->id]->course_name : null;
                $courseDetails[$user->id]['course_name'] = $courseName;
            }

            $search = $request->input('search');

            $users = User::where('usertype', 'user')
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%");
                })
                ->get();


            return view('admin.search-results', compact('users', 'courseDetails', 'salesDetails'));
        }
    }


    public function searchContact(Request $request)
    {
        $salesReps = User::where('usertype', 'salesrep')->get();

        $search = $request->input('search');

        // Perform the search query for contacts
        $contacts = Contact::with('user')
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->get();

        return view('admin.contactsearch-results', compact('contacts', 'salesReps'));
    }


    public function searchInvite(Request $request)
    {
        $salesReps = SalesRep::all();

        $search = $request->input('search');

        // Perform the search query for contacts
        $contacts = Contact::with('user', 'salesRep')
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->get();

        return view('admin.invitations-result', compact('contacts', 'salesReps'));
    }


    public function searchSales(Request $request)
    {
        $search = $request->input('search');


        // Perform the search query for sales representatives
        $search = 'salesrep'; // Replace with your search term

        $salesReps = User::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%");
        })->where('usertype', 'salesrep')->get();


        foreach ($salesReps as $salesRep) {
            $assignedContactsCount = Contact::where('user_id', $salesRep->id)->count();
            $salesRep->assignedContactsCount = $assignedContactsCount;
        }

        return view('admin.salessearch-results', compact('salesReps', 'assignedContactsCount'));
    }




    public function userdelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $user->delete();

        return redirect()->route('userlist')->with('success', 'User deleted successfully.');
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

    public function adminprofile()
    {
        return view('admin.overview');
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

    public function adminsetting()
    {
        return view('admin.settings');
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

    public function courseUpdate(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // Validate the input
        $request->validate([
            'course_logo' => 'nullable|image',
            'about_course' => 'nullable|string',
            'course_name' => 'nullable|string',
            'tuition_fee' => 'nullable|string',
            'instructor_name' => 'nullable|string',
            'start_date' => 'nullable|date',
            'course_syllabus' => 'nullable|string',
            'instructor_bio' => 'nullable|string',
            'other_information' => 'nullable|string',
            // Add more validation rules as needed
        ]);

        // Update the course with the new data
        $course->course_name = $request->input('course_name');
        $course->tuition_fee = $request->input('tuition_fee');
        $course->about_course = $request->input('about_course');
        $course->instructor_name = $request->input('instructor_name');
        $course->start_date = $request->input('start_date');
        $course->course_syllabus = $request->input('course_syllabus');
        $course->instructor_bio = $request->input('instructor_bio');
        $course->other_information = $request->input('other_information');
        // Update other fields as needed

        // Update the course logo if a new image is provided
        if ($request->hasFile('course_logo')) {
            $image = $request->file('course_logo');

            // Store the image and get the path
            $path = $image->store('public/course_logo');

            // Create or update the associated profile picture
            if ($course->profilePicture) {
                $course->profilePicture->path = $path;
                $course->profilePicture->save();
            } else {
                $profilePicture = new ProfilePicture([
                    'path' => $path,
                    'imageable_id' => $course->id,
                    'imageable_type' => Course::class,
                ]);
                $course->profilePicture()->save($profilePicture);
            }
        }

        // Save the updated course
        $course->save();

        // Redirect back to the course details page
        return redirect()->route('course.view', $id)->with('success', 'Course updated successfully');
    }

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
            'nick_name' => 'required',
            'phone_number' => 'required',
        ]);

        $names = $request->input('name');
        $nicknames = $request->input('nick_name');
        $phoneNumbers = $request->input('phone_number');

        $user = Auth::user();

        // Iterate over the arrays and save the contacts to the database
        for ($i = 0; $i < count($names); $i++) {
            // Create a new instance of the Contact model
            $contact = new Contact();

            $contact->name = $names[$i];
            $contact->nickname = $nicknames[$i];
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
            'nick_name' => 'required',
            'phone_number' => 'required',
        ]);



        // Create a new contact instance
        $contact = new Contact();

        // Retrieve the authenticated user
        $user = Auth::user();
        // Set the contact attributes
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone_number');
        $contact->nickname = $request->input('nick_name');
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


    public function Deactivate($id)
    {
        $user = User::findOrFail($id);
        $user->deactivated_at = now();
        $user->save();

        return redirect()->back()->with('success', 'User has been deactivated.');
    }

    public function Activate($id)
    {
        $user = User::findOrFail($id);
        $user->deactivated_at = NULL;
        $user->save();

        return redirect()->back()->with('success', 'User has been re-activated.');
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

    public function inviteList()
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            $salesReps = SalesRep::paginate(10); // Change the page size (10) as per your requirement

            // Get all contacts with the related user details and paginate the results
            $contacts = Contact::with('user', 'salesRep')->paginate(10); // Change the page size (10) as per your requirement

            return view('admin.invitations', compact('contacts', 'salesReps'));
        }
    }

    public function assignContacts(Request $request)
    {
        $contactIds = $request->input('contact_ids');
        $salesRepId = $request->input('sales_rep_id');

        if (empty($contactIds) || !$salesRepId) {
            return redirect()->back()->with('error', 'No contacts selected or sales rep not specified.');
        }

        Contact::whereIn('id', $contactIds)->update(['sales_rep_id' => $salesRepId]);

        return redirect()->back()->with('success', 'Contacts assigned successfully.');
        // $contactIds = $request->input('contact_ids');
        // dd($contactIds);
    }

    public function deleteContacts(Request $request, $id)
    {
        // Find the contact by ID
        $contact = Contact::find($id);

        // Check if the contact exists
        if (!$contact) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        // Delete the contact
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }


    public function showAdminContact($id)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            $contact = Contact::with('user', 'salesRep')->find($id);

            if (!$contact) {
                abort(404); // or handle the error in a different way
            }

            return view('admin.contact', compact('contact'));
        }
    }

    // course controllers
    public function createCourse()
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            return view('admin.course-create');
        }
    }

    public function storeCourse(Request $request)
    {
        if (auth()->user()->usertype === 'admin' || auth()->user()->usertype === 'subadmin') {
            // Validate the request data
            $validatedData = $request->validate([
                'course_logo' => 'nullable|image',
                'about_course' => 'nullable|string',
                'course_name' => 'nullable|string',
                'tuition_fee' => 'nullable|string',
                'instructor_name' => 'nullable|string',
                'start_date' => 'nullable|date',
                'course_syllabus' => 'nullable|string',
                'instructor_bio' => 'nullable|string',
                'other_information' => 'nullable|string',
            ]);

            // Create a new course
            $course = Course::create($validatedData);

            // Add profile picture if provided
            if ($request->hasFile('course_logo')) {
                $path = $request->file('course_logo')->store('public/course_logo');

                // Create a new profile picture record
                $profilePicture = new ProfilePicture();
                $profilePicture->path = $path;

                // Save the profile picture relationship
                $course->profilePicture()->save($profilePicture);
            }

            return redirect()->back()->with('success', 'Course added successfully.');
        }
    }



    public function listCourse()
    {
        $courses = Course::paginate(10); // Change the page size (10) as per your requirement

        foreach ($courses as $course) {
            $userCourseCount = User::where('service', $course->id)->count();
            $course->userCourseCount = $userCourseCount;
        }

        return view('admin.course-list', compact('courses'));
    }
}
