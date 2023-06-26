<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesRepController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect sales reps after login.
     *
     * @var string
     */
    protected $redirectTo = '/salesrep/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:salesrep')->except('logout');
    }

    /**
     * Display the sales rep login view.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.salesrep-login');
    }

    public function showDashboard()
{
    return view('auth.dashboard');
}

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email'; // Assuming email is the unique identifier for sales reps
    }

    /**
     * Handle a sales rep login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('salesrep')->attempt($credentials, $request->filled('remember'))) {
            // Authentication passed...
            return redirect()->intended($this->redirectTo);
        }

        return back()->withErrors([
            'email' => __('auth.failed'),
        ])->withInput();
    }

    /**
     * Log the sales rep out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('salesrep')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
