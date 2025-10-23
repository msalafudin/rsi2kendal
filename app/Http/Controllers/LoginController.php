<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function vlogout()
    {
        return view('logout');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|bail',
            'password' => 'required',
        ]);

        $auth_data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($auth_data)) {
            $name = DB::table('users')->where('email', $request->email)->first();
            $request->session()->put('name', $name->name);
            // dd('berhasil login');
            return redirect()->route('kamar');
        }

        return back()->with('loginError', 'Email atau password anda salah!');
        // var_dump($credentials);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
