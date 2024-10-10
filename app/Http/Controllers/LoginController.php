<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use http\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('username', 'password');

        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {   
            // Jika login berhasil, redirect ke dashboard
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('login')->with('failed', 'password atau username anda salah '); 
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
