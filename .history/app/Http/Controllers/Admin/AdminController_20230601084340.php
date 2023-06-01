<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    use AuthenticatesUsers;

    // ...

    protected function guard()
    {
        // Use your custom guard instead of the default 'web' guard
        return Auth::guard('custom');
    }
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
