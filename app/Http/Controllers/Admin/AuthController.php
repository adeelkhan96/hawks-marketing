<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (auth()->check() && in_array(auth()->user()->role, ['admin', 'editor'])) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->boolean('remember'))) {
            if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
                Auth::logout();
                return back()->withErrors(['email' => 'You do not have access to the admin panel.']);
            }

            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'The provided credentials are incorrect.'])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
