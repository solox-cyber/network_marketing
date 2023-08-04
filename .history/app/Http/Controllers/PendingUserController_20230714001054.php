<?php

namespace App\Http\Controllers;

use App\Models\PendingUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class PendingUserController extends Controller
{
    use Illuminate\Validation\ValidationException;
    use Illuminate\Database\QueryException;

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

}
