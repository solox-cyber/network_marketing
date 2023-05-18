<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\SerialNumberNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the registration form fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',

        ]);

        // Create a new user record
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone_number' => $request->phone_number,
        ]);

        // Perform any additional actions (e.g., sending email notifications, etc.)


        // Generate the serial number based on the user's ID
        $serialNumber = 'SN-' . $user->id;

        // Update the user's serial number
        $user->serial_number = $serialNumber;
        $user->save();

        // Send email notification with the serial number
        // Mail::to($user->email)->send(new SerialNumberNotification($user->serial_number,$user->email));

        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
             // Trigger email verification for the registered user
            $user->sendEmailVerificationNotification();

            return redirect()->route('verification.notice');
        }




        // Redirect the user to the desired location
         return redirect()->route('dashboard');
    }
}
