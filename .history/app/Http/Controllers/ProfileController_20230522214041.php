<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class ProfileController extends Controller
{
    //
    public function update(Request $request)
    {
        $user = Auth::user();

        // Update name and country
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->communication = $request->input('communication');
        $user->name = $request->input('marketing');

        // Update profile picture if a new one is provided
        if ($request->hasFile('profile_picture')) {
            // Delete the existing profile picture if it exists
            if ($user->profilePicture) {
                Storage::delete($user->profilePicture->path);
                $user->profilePicture->delete();
            }

            // Upload the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures');

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

}
