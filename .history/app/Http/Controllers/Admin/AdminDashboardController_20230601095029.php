<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Auth\AdminSessionGuard;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{

     // Use the AdminSessionGuard/**
     * The AdminSessionGuard instance.
     *
     * @var \App\Auth\AdminSessionGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \App\Auth\AdminSessionGuard  $guard
     * @return void
     */
    public function __construct(AdminSessionGuard $guard)
    {
        $this->guard = $guard;
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
        // Add your logic to fetch data or perform actions for the admin dashboard

        return view('admin.dashboard');
    }


    // Logout the admin user
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}


