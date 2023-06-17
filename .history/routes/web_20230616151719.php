<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesRepController;

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

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Route::get('/link', function () {
//     Artisan::call('storage:link');
// });




// Users routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/overview', [DashboardController::class, 'profile'])->name('overview');
    Route::get('/account', [DashboardController::class, 'setting'])->name('setting');
    Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
    Route::get('/payout', [DashboardController::class, 'payout'])->name('payout');
    Route::post('/payout', [DashboardController::class, 'payoutGate'])->name('payment.payout');
    Route::get('/statement', [DashboardController::class, 'statement'])->name('statement');
    Route::get('/add-contact', [DashboardController::class, 'AddContact'])->name('add_contact');
    Route::get('/update-email', [DashboardController::class, 'showEmail'])->name('show_email');
    Route::post('/profile/setting', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/contact/add', [DashboardController::class, 'store'])->name('contact.add');
    Route::post('/contacts/add', [DashboardController::class, 'multistore'])->name('contacts.add');
    Route::post('/contact/search', [DashboardController::class, 'search'])->name('contact.search');
    Route::get('/contacts/{contact}/edit', [DashboardController::class, 'EditContact'])->name('edit_contact');
    Route::put('/contacts/{contact}', [ProfileController::class, 'UpdateContact'])->name('contacts.update');
    // Route::get('/add-contact', [DashboardController::class, 'contacts'])->name('contacts.index');
    Route::get('/contacts/{contact}', [DashboardController::class, 'ShowContact'])->name('contacts.show');
    Route::delete('contacts/{contact}', [DashboardController::class, 'ContactDestroy'])->name('contacts.destroy');
    Route::post('/update-email', [DashboardController::class, 'updateEmail'])->name('update_email');
    Route::post('/deactivate-account', [DashboardController::class, 'deactivateAccount'])->name('deactivate.account');
    Route::get('/dashboard/password/reset/{token}', [DashboardController::class, 'passwordReset'])->name('pass.reset');
    Route::post('/dashboard/password/reset', [DashboardController::class, 'passwordStore'])->name('pass.update');
    Route::get('/mycourses', [DashboardController::class, 'myCourses'])->name('myCourses');
    Route::get('/mycourses/details/{id}', [DashboardController::class, 'Coursedetails'])->name('course.details');
    Route::get('/courses', [DashboardController::class, 'allCourses'])->name('allCourses');
    Route::get('/users/search', [DashboardController::class, 'searchUsers'])->name('users.search');

});


// Admin login routes
// Route::prefix('admin')->group(function () {
// Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/login', [AdminController::class, 'login']);
// Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
// });



// Admin dashboard route
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/home', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'adminprofile'])->name('admin.profile');
    Route::get('/setting', [DashboardController::class, 'adminsetting'])->name('admin.setting');
    Route::get('/contact', [DashboardController::class, 'contact'])->name('admin.contact');
    Route::get('/users', [DashboardController::class, 'userlist'])->name('userlist');
    Route::get('/users/filter', [DashboardController::class, 'filterUsers'])->name('filter.userlist');
    Route::get('/users/search', [DashboardController::class, 'searchUsers'])->name('searchUsers');
    Route::get('/commissions', [DashboardController::class, 'commissions'])->name('admin.commissions');
    Route::get('/commission/{id}', [DashboardController::class, 'commission'])->name('approve.commissions');
    Route::get('/user/{id}', [DashboardController::class, 'userview'])->name('userview');
    Route::delete('/users/{id}', [DashboardController::class, 'userdelete'])->name('users.destroy');
    Route::get('/users/export', [DashboardController::class, 'exportUsers'])->name('users.export');
    Route::post('/users/import', [DashboardController::class, 'importUsers'])->name('users.import');
    Route::post('/commission/{id}/paid', [DashboardController::class, 'status_paid'])->name('paid');
    Route::post('/commission/{id}/progress', [DashboardController::class, 'status_inprogress'])->name('progress');
    Route::post('/commission/{id}/decline', [DashboardController::class, 'status_decline'])->name('decline');
    Route::get('/sales-rep/add', [DashboardController::class, 'salesAdd'])->name('admin.salesrep');
    Route::post('/sales-reps', [DashboardController::class, 'salesStore'])->name('salesreps.store');
    Route::get('/sales-reps/view', [DashboardController::class, 'salesView'])->name('view.salesrep');
    Route::get('/sales-reps/{id}', [DashboardController::class, 'salesShow'])->name('sales-reps.show');
    // Route::post('/salescontact/search', [DashboardController::class, 'salessearch'])->name('salescontact.search');
    Route::get('/salescontact/search', [SalesContactController::class, 'search'])->name('salescontact.search');
    Route::post('/sales-reps/{salesRepId}/contacts/{contactId}/assign', [DashboardController::class, 'assignContact'])->name('sales-reps.contacts.assign');
    Route::delete('/sales-reps/{id}', [DashboardController::class, 'salesDestroy'])->name('sales-reps.destroy');
    Route::get('/invitation/contacts', [DashboardController::class, 'inviteList'])->name('invite.index');
    Route::post('/invitation/assign-contacts', [DashboardController::class, 'assignContacts'])->name('contacts.assign');
    Route::delete('/invitation/delete-contacts/{id}', [DashboardController::class, 'deleteContacts'])->name('contact.destroy');
    Route::get('/invitation/show-contact/{id}', [DashboardController::class, 'showAdminContact'])->name('contact.show');
    Route::get('/course/create', [DashboardController::class, 'createCourse'])->name('course.create');
    Route::post('/courses', [DashboardController::class, 'storeCourse'])->name('courses.store');
    Route::get('/courses/list', [DashboardController::class, 'listCourse'])->name('course.list');
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
