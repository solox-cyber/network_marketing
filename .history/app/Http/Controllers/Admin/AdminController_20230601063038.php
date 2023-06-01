<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Admin authentication successful
            return redirect()->intended('/admin/dashboard');
        }

        // Admin authentication failed
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }
}
