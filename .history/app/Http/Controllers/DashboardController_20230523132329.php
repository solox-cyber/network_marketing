<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('add-contact');
    }

    public function EditContact()
    {
        return view('edit-contact');
    }

    public function contact()
    {
        return view('contacts');
    }

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
        $contact->password = bcrypt($password = Str::random(8)); // Encrypt the password
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
