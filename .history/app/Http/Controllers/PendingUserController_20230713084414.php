<?php

namespace App\Http\Controllers;

use App\Models\PendingUser;
use Illuminate\Http\Request;



class PendingUserController extends Controller
{
    public function saveUserData(Request $request)
        {
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



        return response()->json(['message' => 'User data saved successfully'], 200);
        }
}
