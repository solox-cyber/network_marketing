<?php

namespace App\Http\Controllers;

use App\Mail\SerialNumberNotification;
use App\Models\Contact;
use Illuminate\Support\Str;
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
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming profile_picture is the name of the file input field
        ]);

        $user = Auth::user();

        // Update name and country
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');



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

    public function UpdateContact(Request $request, Contact $contact)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the contact belongs to the authenticated user
        if ($contact->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You do not have permission to update this contact.');
        }



        // Validate the form input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'city' => 'required',
            'country' => 'required',
            'notes' => 'nullable',
            
        ]);


        // Update the contact details
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone_number');
        $contact->city = $request->input('city');
        $contact->country = $request->input('country');
        $contact->notes = $request->input('notes');

      

        // Save the contact changes
        $contact->save();

          // Update profile picture if a new one is provided
          if ($request->hasFile('profile_picture')) {
            // Delete the existing profile picture if it exists
            if ($contact->profilePicture) {
                Storage::delete($contact->profilePicture->path);
                $contact->profilePicture->delete();
            }

            // Upload the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures');

            // Create a new profile picture record
            $profilePicture = new ProfilePicture();
            $profilePicture->path = $path;

            // Save the profile picture relationship
            $contact->profilePicture()->save($profilePicture);
        }

        return redirect()->route('edit_contact',['contact' => $contact->id])->with('success', 'Contact updated successfully.');
    }
}
