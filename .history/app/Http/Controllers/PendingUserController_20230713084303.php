<?php

namespace App\Http\Controllers;

use App\Models\PendingUser;
use Illuminate\Http\Request;



class PendingUserController extends Controller
{
    public function saveUserData(Request $request)
    {
        (Request $request)
        {
            // Validate the registration form fields
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'service' => 'required',
            ]);

            // Create a new user record
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'phone_number' => $request->phone_number,
                'service' => $request->service,
            ]);

            // Perform any additional actions (e.g., sending email notifications, etc.)


            // Generate the serial number based on the user's ID
            $serialNumber = 'SN-' . $user->id;

            // Update the user's serial number
            $user->serial_number = $serialNumber;
            $user->payment_status = 'paid';
            $user->enrollment_status = 2;
            $user->save();



        return response()->json(['message' => 'User data saved successfully'], 200);
    }
}
