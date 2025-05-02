<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LogInController extends Controller
{
    public function login(Request $request)
    {
        // Validate the input data
        $credentials = $request->validate([
            'user_email' => 'required|string|email|max:50',
            'user_password' => 'required|string|min:6|max:100',
        ]);

        // Check if the email exists in the database
        $user = User::where('user_email', $credentials['user_email'])->first();

        if (!$user) {
            return back()->withErrors(['user_email' => 'Email does not exist.'])->onlyInput('user_email');
        }

        // Verify the password
        if (!\Illuminate\Support\Facades\Hash::check($credentials['user_password'], $user->user_password)) {
            return back()->withErrors(['user_password' => 'Invalid password.'])->onlyInput('user_email');
        }

        // Log the user in
        Auth::login($user);

        // Redirect to the home route
        return redirect()->route('home')->with('success', 'Login successful!');
    }
}
