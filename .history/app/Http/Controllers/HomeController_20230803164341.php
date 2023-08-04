<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SalesRep;
use App\Models\SalesWallet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\ProfilePicture;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\WalletStatement;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    //

    public function welcome(){
        $courses = Course::all();
        return view('welcomepage', compact('courses'));
    }

    public function contact(){
        $courses = Course::all();
        return view('contact', compact('courses'));
    }

    public function contactSubmit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required',
            'phone_number' => 'required|string',
            'message' => 'required|string',
            'program' => 'required|string',
        ]);

        // Process the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $email = $request->input('country');
        $email = $request->input('phone_number');
        $email = $request->input('program');
        $email = $request->input('email');
        $message = $request->input('message');

        // You can send an email with the form data
        Mail::to('support@lern.africa')->send(new ContactFormMail($name, $email, $message));

        // Once the form data is processed, you can redirect back to the contact page with a success message.
        return redirect()->route('contact')->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    public function header(){
        $courses = Course::all();
        return view('homepageheader', compact('courses'));
    }

    public function searchCourse(Request $request)
    {
        $searchQuery = $request->input('query');
        $courses = Course::where('course_name', 'like', "%$searchQuery%")->get();

        return view('welcomesearch', compact('courses', 'searchQuery'));
    }

    public function viewCourse($id){

        $course = Course::findOrFail($id);

        // If the course with the given ID doesn't exist, redirect back with an error message
        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }
        return view('welcomecoursedetails', compact('course'));
    }

    public function index()
    {
        $WalletAmountGross = 0;
        $commissionPercentage = 0 ;

        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                // Retrieve the authenticated user
                $user = Auth::user();

                $check = $user->check_id;
                // retrieve the course details of the user
                $course = $user->service;
                $courseDetails = Course::where('id', $course)->get();


                $course = $user->service;
                $courseDetails = Course::where('id', $course)->get();


                foreach ($courseDetails as $course) {


                $courseTuition = $course->tuition_fee;
                }

                // $serial_number = $user->serial_number;
                // $digit = intval(substr($serial_number, -1));

                // foreach ($courseDetails as $course) {
                // $course_logo = $course->course_logo;
                // $course_name = $course->course_name;

                // $courseTuition = $course->tuition;

                // $about_course = $course->about_course;
                // $profile_picture = $course->profilePicture;
                // $course_syllabus = $course->course_syllabus;
                // }



                $contactCount = $user->contacts()->count();



                // $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
                $userCountDate = User::where('created_at', '>', $user->created_at)->count();

                $totalCount = $userCountDate;

                $userCount = User::where('usertype', 'user')
                ->count();
                // Assuming you have a variable $value that represents the user's value
                $totalCount = User::where('usertype', 'user')
                    ->where('check_id', '>', $check)
                    ->count();

                // $totalCount = $userCountDate;

                // Assuming you have a variable $value that represents the user's value


                // $sequence = [4, 16, 64, 256, 1024, 4096, 16384, 65536];
                $level = 0;


                $N = Auth::id();
                // $level = 0;
                // $commissionPercentage = 0;


                $ipAddress = '102.89.46.250';
                // $ipAddress = request()->ip();
                $location = Location::get($ipAddress);


                $countryCode = $location->countryCode;

                $Rate = 1 / 777.58;


                if ($countryCode === 'NG') {
                    $pay = $courseTuition;
                } else {
                    $pay = $courseTuition * $Rate;
                }

                if ($totalCount == 0 && $totalCount < ($check * 4 + 1)) {
                    $level = 0;
                    $commissionPercentage = 0;
                    $WalletAmountGross = $pay * ($commissionPercentage / 100);
                } elseif ($totalCount >= ($check * 4 + 1) && $totalCount < ($check * 16 + 5)) {
                    $level = 1;
                    $commissionPercentage = 10;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 4;
                } elseif ($totalCount >= ($check * 16 + 5) && $totalCount < ($check * 64 + 21)) {
                    $level = 2;
                    $commissionPercentage = 8;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 16;
                } elseif ($totalCount >= ($check * 64 + 21) && $totalCount < ($check * 256 + 85)) {
                    $level = 3;
                    $commissionPercentage = 6;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 64;
                } elseif ($totalCount >= ($check * 256 + 85)) {
                    $level = 4;
                    $commissionPercentage = 4;
                    $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * 256;
                }




                // Get the total withdraw request count
                $totalWithdrawRequests = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();

                $paymentStatus = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')
                    ->where('payment_status', 'paid')
                    ->sum('amount');

                // Check if the payment status is verified
                if ($paymentStatus > 0) {
                    if ($countryCode === 'NG') {
                        $WalletAmount = $WalletAmountGross - $paymentStatus;
                    } else {
                        $WalletAmount = $WalletAmountGross - ($paymentStatus * $Rate);
                    }
                } else {

                    $WalletAmount = $WalletAmountGross;
                }

                // Get the total withdraw request count
                $totalWithdrawRequests = WalletStatement::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();



                // Check if the payment status is verified



                $user->level = $level;
                $user->wallet_amount = $WalletAmount;
                $user->commission_status = 'pending';
                $user->commission_percentage = $commissionPercentage;
                $user->save();


                //Retrieve User Service from Database
                $service = $user->service;
                $serial_number = $user->serial_number;
                $enrollment_status = $user->enrollment_status;



                return view('dashboard', compact('courseDetails', 'totalCount', 'contactCount', 'totalCount', 'course', 'userCount', 'totalCount', 'WalletAmount', 'commissionPercentage', 'level', 'service', 'serial_number', 'enrollment_status'));
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
            } elseif ($usertype == 'salesrep') {
                $totalUsers = User::where('sales_rep_id', Auth::user()->id)->count();
                $totalUsersPay = User::where('sales_rep_id', Auth::user()->id)
                    ->where('payment_status', 'paid')
                    ->count();

                $Contacts = Contact::all()->count();
                $totalContacts = Contact::where('sales_id', Auth::user()->id)->count();
                $totalSalesReps = SalesRep::count();

                $user = Auth::user();

                $pay = 100000;



                $commissionPercentage = $user->commission_percentage;
                $WalletAmountGross = ($pay * ($commissionPercentage / 100)) * $totalUsersPay;



                // Get the total withdraw request count
                $totalWithdrawRequests = SalesWallet::where('user_id', $user->id)
                    ->where('type', 'withdrawal')->count();

                $paymentStatus = SalesWallet::where('user_id', $user->id)
                    ->where('type', 'withdrawal')
                    ->where('payment_status', 'Paid')
                    ->sum('amount');


                // Check if the payment status is verified
                if ($paymentStatus > 0) {
                    $WalletAmount = $WalletAmountGross - $paymentStatus;
                } else {

                    $WalletAmount = $WalletAmountGross;
                }



                $user->wallet_amount = $WalletAmount;
                $user->commission_status = 'pending';
                $user->save();

                return view('salesdash', compact('totalUsers', 'totalContacts', 'Contacts', 'WalletAmount'));
            } else {
                return redirect()->back();
            }
        }
    }

}
