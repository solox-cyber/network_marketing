<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PendingUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use App\Mail\UserRegistrationNotification;
use Illuminate\Support\Facades\Mail;



class PendingUserController extends Controller
{


    public function saveUserData(Request $request)
    {
        try {
            // Validate the registration form fields
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'service' => 'required',
            ]);

            // Create a new user record
            $user = PendingUser::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'phone_number' => $request->phone_number,
                'service' => $request->service,
            ]);

            // Perform any additional actions (e.g., sending email notifications, etc.)

            $user->save();

            $paymentUrl = route('payment', ['user_id' => $user->id]);

            // Send the registration email with the payment link
            Mail::to($user->email)->send(new UserRegistrationNotification($user, $paymentUrl));


            return redirect()->back();

        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (QueryException $e) {
            // Handle duplicate entry error
            if ($e->errorInfo[1] == 1062) {
                $message = 'Email already exists. Please choose a different email address.';
                return redirect()->back()->withErrors([$message])->withInput();
            }

            // Handle other database errors
            $message = 'An error occurred while saving user data.';
            return redirect()->back()->withErrors([$message])->withInput();
        }
    }

    public function payment($user_id)
{
    // Retrieve the user based on the user_id
    $user = PendingUser::find($user_id);
    $courses = Course::all();

    // Check if the user exists
    if (!$user) {
        // Handle the case when the user is not found
        return redirect()->back()->withErrors('User not found.');
    }

    // Generate the form fields
    $formFields = [
        'name' => $user->name,
        'email' => $user->email,
        'phone_number' => $user->phone_number,
        'service' => $user->service,
        // Add more fields as needed
    ];


    // Pass the form fields and form action to the payment view
    return view('auth.payment', compact('formFields',''));
}




}
