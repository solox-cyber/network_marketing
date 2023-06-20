<?php

namespace App\Http\Controllers;

use App\Models\SalesRep;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\ProfilePicture;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\WalletStatement;
class HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                // Your existing user-specific code here

                return view('dashboard', compact('contactCount', 'userCount', 'totalCount', 'WalletAmount', 'commissionPercentage', 'level', 'service', 'serial_number'));
            } elseif ($usertype == 'admin') {
                $usersCount = User::count();
                $contactsCount = Contact::count();
                $salesRepsCount = SalesRep::count();

                $chartData = [
                    'labels' => ['Users', 'Contacts', 'Sales Reps'],
                    'datasets' => [
                        [
                            'data' => [$usersCount, $contactsCount, $salesRepsCount],
                            'backgroundColor' => [
                                'rgba(0, 123, 255, 0.5)', // Customize the colors as needed
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(0, 255, 0, 0.5)',
                            ],
                            'borderColor' => [
                                'rgba(0, 123, 255, 1)',
                                'rgba(255, 0, 0, 1)',
                                'rgba(0, 255, 0, 1)',
                            ],
                            'borderWidth' => 1,
                        ]
                    ]
                ];

                if (request()->ajax()) {
                    return response()->json($chartData);
                }

                return view('admindash')->with('chartData', json_encode($chartData));
            } else {
                return redirect()->back();
            }
        }
    }
}
