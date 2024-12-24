<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordConfirmController extends Controller
{
    /**
     * Show the form to confirm the user's password.
     *
     * @return \Illuminate\View\View
     */
    public function showConfirmForm()
    {
        return view('passwords.confirmPassword');
    }

    /**
     * Handle the confirmation of the current password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirm(Request $request)
    {
        $request->validate([
            'password' => 'required|current_password',
        ]);

        // Logic to proceed after confirming password
        // For example, allow access to a protected page
        return redirect()->route('password.reset');
    }
}
