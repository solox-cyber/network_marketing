<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SalesRep;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\ProfilePicture;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\WalletStatement;

class HomeController extends Controller
{
    //
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
            } elseif ($usertype == 'subadmin') {
            }else {
                return redirect()->back();
            }
        }
    }

}
