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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email) //gaboleh ngambil db buat datanya
                ->where('password', $request->password)
                ->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        if ($request->password !== $user->password) {
            return back()->with('error', 'Password salah.');
        }
        if ($user->role === 'admin') {
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        } else {
            Auth::login($user);
            return redirect()->route('umum.dashboard');
        }
    }
}
