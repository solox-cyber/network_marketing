<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;
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

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);





Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/overview', [DashboardController::class, 'profile'])->name('overview');
    Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
    Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
    Route::get('/add-contact', [DashboardController::class, 'AddContact'])->name('add_contact');
    Route::get('/update-email', [DashboardController::class, 'showEmail'])->name('show_email');
    Route::post('/profile/setting', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/contact/add', [DashboardController::class, 'store'])->name('contact.add');
    Route::get('/contacts/{contact}/edit', [DashboardController::class, 'EditContact'])->name('edit_contact');
    Route::put('/contacts/{contact}', [ProfileController::class, 'UpdateContact'])->name('contacts.update');
    // Route::get('/add-contact', [DashboardController::class, 'contacts'])->name('contacts.index');
    Route::get('/contacts/{contact}', [DashboardController::class, 'ShowContact'])->name('contacts.show');
    Route::delete('contacts/{contact}', [DashboardController::class, 'ContactDestroy'])->name('contacts.destroy');
    Route::post('/update-email', [DashboardController::class, 'updateEmail'])->name('update_email');
    Route::post('/deactivate-account', [DashboardController::class, 'deactivateAccount'])->name('deactivate.account');
    Route::get('/dashboard/password/reset', [DashboardController::class, 'resetcreate'])->name('password.reset');
Route::post('/dashboard/password/reset', [DashboardController::class, 'resetstore'])->name('pass.update');
});


// Login routes
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Handle the login request
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest');

// Log the user out
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');




// Email Verification Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

// Display the password reset request form
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

// Send password reset email
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

// Display the password reset form
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

// Reset the password
Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');

// Add other authentication-related routes as needed
