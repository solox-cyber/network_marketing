<?php

namespace App\Http\Controllers;

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
        return view('add-contact');
    }

    public function contact()
    {
        return view('contacts');
    }
    public function logout()
{
    Auth::logout(); // Log out the authenticated user

    // Perform any additional actions if needed

    return redirect('/login'); // Redirect the user to the login page after logout
}
}
