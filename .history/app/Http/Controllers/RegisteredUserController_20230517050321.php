<?php

namespace App\Http\Controllers;

use App\Mail\SerialNumberNotification;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Handle the registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone_number' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
        ]);

        // Generate the serial number based on the user's ID
        $serialNumber = 'SN-' . $user->id;

        // Update the user's serial number
        $user->serial_number = $serialNumber;
        $user->save();

        // Send email notification with the serial number
        Mail::to($user->email)->send(new SerialNumberNotification($user->serial_number));

        event(new Registered($user));

        return redirect()->route('dashboard');
    }
}
