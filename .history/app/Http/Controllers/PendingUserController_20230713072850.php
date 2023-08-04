<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingUserController extends Controller
{
    public function saveUserData(Request $request)
    {
        // Retrieve the data from the request
        $name = $request->input('name');
        $email = $request->input('email');
        $service = $request->input('service');
        $phone_number = $request->input('phone_number');
        $password = $request->input('password');

        // Create a new user or save the data into another table as per your requirement
        $pendingUser = new PendingUser();
        $user->name = $name;
        $user->email = $email;
        $user->service = $service;
        $user->phone_number = $phone_number;
        $user->password = bcrypt($password); // Encrypt the password
        $user->save();

        return response()->json(['message' => 'User data saved successfully'], 200);
    }
}
