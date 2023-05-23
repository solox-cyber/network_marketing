<?php

namespace App\Http\Controllers;

use App\Mail\SerialNumberNotification;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\ProfilePicture;


class ProfileController extends Controller
{
    //
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'country' => 'required',
            'communication' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming profile_picture is the name of the file input field
        ]);

        $user = Auth::user();

        // Update name and country
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->communication = $request->input('communication');


        // Update profile picture if a new one is provided
        if ($request->hasFile('profile_picture')) {
            // Delete the existing profile picture if it exists
            if ($user->profilePicture) {
                Storage::delete($user->profilePicture->path);
                $user->profilePicture->delete();
            }

            // Upload the new profile picture
            $path = $request->file('profile_picture')->store('public/profile_pictures');

            // Create a new profile picture record
            $profilePicture = new ProfilePicture();
            $profilePicture->path = $path;

            // Save the profile picture relationship
            $user->profilePicture()->save($profilePicture);
        }

        // Save the user model
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function add(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'country' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming profile_picture is the name of the file input field
        ]);

        $user = Auth::user();

        // Update name and country
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->communication = $request->input('notes');


        // Update profile picture if a new one is provided
        if ($request->hasFile('profile_picture')) {
            // Delete the existing profile picture if it exists
            if ($user->profilePicture) {
                Storage::delete($user->profilePicture->path);
                $user->profilePicture->delete();
            }

            // Upload the new profile picture
            $path = $request->file('profile_picture')->store('public/profile_pictures');

            // Create a new profile picture record
            $profilePicture = new ProfilePicture();
            $profilePicture->path = $path;

            // Save the profile picture relationship
            $user->profilePicture()->save($profilePicture);
        }
        $password = bcrypt(Str::random(8));
        // Generate the serial number based on the user's ID
        $serialNumber = 'SN-' . $user->id;

        // Update the user's serial number
        $user->serial_number = $serialNumber;

        // Save the user model
        $user->save();

        // Send email notification with the serial number
        Mail::to($user->email)->send(new SerialNumberNotification($user->serial_number,$user->name));




        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
             // Trigger email verification for the registered user
            $user->sendEmailVerificationNotification();

            return redirect()->route('verification.notice');
        }


        return redirect()->back()->with('success', 'New Contact added successfully.');
    }


}
