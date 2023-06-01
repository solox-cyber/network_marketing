<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Add your logic to fetch data or perform actions for the admin dashboard

        return view('admin.dashboard');
    }
}


