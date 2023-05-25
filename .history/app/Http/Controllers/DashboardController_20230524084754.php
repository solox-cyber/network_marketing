<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('overview');
    }

    public function setting()
    {
        return view('settings');
    }

    public function AddContact()
    {
        $user = Auth::user();
        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('add-contact', compact('contacts'), compact('count'));
    }

    public function EditContact(Contact $contact)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the contact belongs to the authenticated user
        if ($contact->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You do not have permission to edit this contact.');
        }

        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('edit-contact', compact('contacts'), compact('count'));
    }

    public function UpdateContact(Contact $contact){
// Retrieve the authenticated user
    $user = Auth::user();

    // Check if the contact belongs to the authenticated user
    if ($contact->user_id !== $user->id) {
        return redirect()->back()->with('error', 'You do not have permission to update this contact.');
    }

    // Validate the form data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        // Add validation rules for other fields as needed
    ]);

    // Update the contact with the submitted data
    $contact->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'notes' => $request->input('notes'),
        // Update other fields as needed
    ]);

    return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
}
Make sure to customize the validation rules and update logic according to your contact model and database schema.

Visit the /contacts/{contact}/edit route for a specific contact in your browser to edit the contact details.

Submit the form, and the update method will handle the update process and redirect back to the contacts list with a success message.

Note: This implementation assumes that you have a contacts table with the necessary columns and a relationship with the user table. Modify the code accordingly if your schema or relationships differ.





User
edit contact including country select option and profile picture
ChatGPT
To edit a contact including a country select option and profile picture, you can follow these steps:

In your ContactController, modify the edit method to retrieve the contact information for editing, including the associated country and profile picture:
php
Copy code
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

public function edit(Contact $contact)
{
    // Retrieve the authenticated user
    $user = Auth::user();

    // Check if the contact belongs to the authenticated user
    if ($contact->user_id !== $user->id) {
        return redirect()->back()->with('error', 'You do not have permission to edit this contact.');
    }

    // Retrieve all countries for the select option
    $countries = Country::all();

    return view('contacts.edit', compact('contact', 'countries'));
}
Create a view file edit.blade.php to display the contact form for editing, including the country select option and profile picture upload. For example:
php
Copy code
<!-- contacts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Display the contact fields for editing -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" value="{{ $contact->phone }}" required>

        <label for="country">Country:</label>
        <select name="country" required>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}" {{ $contact->country_id == $country->id ? 'selected' : '' }}>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>

        <label for="notes">Notes:</label>
        <textarea name="notes">{{ $contact->notes }}</textarea>

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture">

        <button type="submit">Update Contact</button>
    </form>
@endsection
Customize the view file to include all the necessary fields for editing a contact, including the country select option and profile picture upload.

Define a route to access the edit method and handle the form submission in your routes file (web.php):
php
Copy code
use App\Http\Controllers\ContactController;

Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Create an update method in your ContactController to handle the form submission and update the contact details, including the country and profile picture:
php
Copy code
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Contact;
use App\Models\Country;

public function update(Request $request, Contact $contact)
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
        'phone' => 'required',
        'country' => 'required',
        'notes' => 'nullable',
        'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update the contact details
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->phone = $request->input('phone');
    $contact->country_id = $request->input('country');
    $contact->notes = $request->input('notes');

    // Update the profile picture if a new one is provided
    if ($request->hasFile('profile_picture')) {
        // Delete the existing profile picture if it exists
        if ($contact->profilePicture) {
            Storage::delete($contact->profilePicture->path);
            $contact->profilePicture->delete();
        }

        // Upload the new profile picture
        $path = $request->file('profile_picture')->store('public/profile_pictures');

        // Create a new profile picture record
        $profilePicture = new ProfilePicture();
        $profilePicture->path = $path;

        // Save the profile picture relationship
        $contact->profilePicture()->save($profilePicture);
    }

    // Save the contact changes
    $contact->save();

    return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');

    }
    public function contact()
    {
        $user = Auth::user();
        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('contacts', compact('contacts'), compact('count'));
    }

    // public function contacts()
    // {
    //     $contacts = Contact::all();
    //     return view('contacts_methods.search',compact('contacts'));
    // }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
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
        $contact->phone = $request->input('phone_number');
        $contact->notes = $request->input('notes');
        $contact->city = $request->input('city');
        $contact->user_id = $user->id;
        $contact->password = bcrypt(Str::random(8)); // Encrypt the password
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
    public function logout()
    {
        Auth::logout(); // Log out the authenticated user

        // Perform any additional actions if needed

        return redirect('/login'); // Redirect the user to the login page after logout
    }
}
