<?php

namespace App\Http\Controllers;

use App\Models\ProfilePicture;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
 
    //
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'notes' => 'nullable',
            'city' => 'required',
            'password' => 'nullable',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        // Create a new contact instance
        $contact = new Contact();
        $user = Auth::user();
        // Set the contact attributes
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->notes = $request->input('notes');
        $contact->city = $request->input('city');
        $contact->user_id = $user->id;
// Optionally, you can set a serial number based on the user's ID
$contact->serial_number = 'SN' . $user->id . '-' . $contact->id;

        // Associate the contact with the authenticated user

        $user->contacts()->save($contact);

         // Add profile picture if provided
         if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/profile_pictures');

            // Create a new profile picture record
            $profilePicture = new ProfilePicture();
            $profilePicture->path = $path;

            // Save the profile picture relationship
            $contact->profilePicture()->save($profilePicture);
        }

        return redirect()->back()->with('success', 'Contact created successfully.');
    }

}
