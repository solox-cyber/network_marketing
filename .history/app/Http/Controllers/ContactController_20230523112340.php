<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\SerialNumberNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\ProfilePicture;
class ContactController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validate the registration form fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',

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
        Mail::to($user->email)->send(new SerialNumberNotification($user->serial_number,$user->name));




        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
             // Trigger email verification for the registered user
            $user->sendEmailVerificationNotification();

            return redirect()->route('verification.notice');
        }




        // Redirect the user to the desired location
         return redirect()->route('dashboard');
    }

}
