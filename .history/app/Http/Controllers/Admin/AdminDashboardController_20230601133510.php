<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// protected $redirectTo = '/dashboard';

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        // Add your logic to fetch data or perform actions for the admin dashboard

        return view('add.');
    }


    // Logout the admin user
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}


