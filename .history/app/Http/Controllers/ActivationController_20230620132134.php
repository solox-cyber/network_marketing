<?php

use App\Models\User;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate(Request $request, $token)
    {
        $user = User::where('activation_token', $token)->first();

        if ($user) {
            $user->deactivated_at = ();
            $user->activation_token = null;
            $user->save();

            // Optionally, you can log in the user programmatically
            // auth()->login($user);

            return redirect()->route('activation.success');
        }

        abort(404);
    }
}
