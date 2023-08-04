<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\SerialNumberNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CustomVerifyEmailNotification;



class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $courses = Course::all();
        return view('auth.register', compact('courses'));
    }

    public function register(Request $request)
    {
        // Validate the registration form fields
         // Validate the registration form fields
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'service' => 'required',
    ]);

    // Get the last user with usertype = user
    $lastUser = User::where('usertype', 'user')->latest()->first();

    // Extract the serial number digits from the last user's serial number
    $lastSerialNumber = $lastUser ? intval(str_replace('SN-', '', $lastUser->serial_number)) : 0;

    // Increment the serial number
    $newSerialNumber = 'SN-' . ($lastSerialNumber + 1);

    // Create a new user record
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'phone_number' => $request->phone_number,
        'service' => $request->service,
        'serial_number' => $newSerialNumber,
        'payment_status' => 'paid',
        'enrollment_status' => 2,
    ]);




        // Mail::to($user->email)->send(new SerialNumberNotification($user->serial_number,$user->name));




        if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {

            //     $user->sendEmailVerificationNotification();

            //     return redirect()->route('verification.notice');

            // Send email notification with the serial number and verification URL
            $user->sendEmailVerificationNotification();
        }




        // Redirect the user to the desired location
        return redirect()->route('dashboard');
    }


}
