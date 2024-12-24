<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordUpdateController extends Controller
{
    /**
     * Show the form for resetting the password.
     *
     * @param  string  $token
     * @param  string  $email
     * @return \Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('passwords.resetPassword', [
            'token' => $token,
            'email' => $request->email
        ]);
    }

    /**
     * Handle the password update.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', trans($response))
                    : back()->withErrors(['email' => trans($response)]);
    }
}
