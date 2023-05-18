<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('register');
});

// Other Fortify routes (reset password, email verification, etc.)
Fortify::resetPasswordView(function () {
    return view('reset-password');
});

Fortify::verifyEmailView(function () {
    return view('verify-email');
});

