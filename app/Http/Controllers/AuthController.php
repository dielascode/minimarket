<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = Auth::user();

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}

            // Auth::login($user);

            // if ($user->role === 'admin') {
            //     return redirect()->route('admin.dashboard');
            // }

            // return redirect()->route('umum.dashboard');
