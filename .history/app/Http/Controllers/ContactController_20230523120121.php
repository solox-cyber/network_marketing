<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\SerialNumberNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\ProfilePicture;
class ContactController extends Controller
{
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

        // Set the contact attributes
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->notes = $request->input('notes');
        $contact->city = $request->input('city');
        $contact->user_id = $user->id;


        // Associate the contact with the authenticated user
        $user = Auth::user();
        $user->contacts()->save($contact);

        // Optionally, you can set a serial number based on the user's ID
        $contact->serial_number = 'SN' . $user->id . '-' . $contact->id;
        $contact->save();

        return redirect()->back()->with('success', 'Contact created successfully.');
    }

}
