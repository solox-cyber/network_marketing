<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $contactCount = Contact::count();
      $userCount = User::count();

      // Retrieve the authenticated user
      $user = Auth::user();
     
    $contactCountDate = Contact::where('created_at', '>', $user->created_at)->count();
       $userCountDate = User::where('created_at', '>', $user->created_at)->count();

    //   $totalCount = $contactCountD + $userCount;

        return view('dashboard', compact('contactCount', 'userCount','count'));
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
    //     // Retrieve the contact details based on the provided ID
    //   $contact = Contact::find($contact);

        $contacts = $user->contacts;
        $count = $user->contacts()->count();
        return view('edit-contact', compact('contact','contacts'), compact('count'));
    }


    public function ShowContact($id){
        // Retrieve the authenticated user
        $user = Auth::user();
        $count = $user->contacts()->count();
        $contacts = $user->contacts;
        $contact = Contact::findOrFail($id);
    return view('view-contact', compact('contact','contacts'),compact('count'));
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
            'country' => 'required',
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
        $contact->country = $request->input('country');
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

    public function ContactDestroy(Contact $contact)
{
    // Retrieve the authenticated user
    $user = Auth::user();

    // Check if the contact belongs to the authenticated user
    if ($contact->user_id !== $user->id) {
        return redirect()->back()->with('error', 'You do not have permission to delete this contact.');
    }

    // Delete the profile picture if it exists
    if ($contact->profilePicture) {
        Storage::delete($contact->profilePicture->path);
        $contact->profilePicture->delete();
    }

    // Delete the contact
    $contact->delete();

    return redirect()->route('contact')->with('success', 'Contact deleted successfully.');
}



    public function logout()
    {
        Auth::logout(); // Log out the authenticated user

        // Perform any additional actions if needed

        return redirect('/login'); // Redirect the user to the login page after logout
    }
}

