<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        // Pengecekan account
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            // Redirect ke halaman home jika berhasil login
            return redirect()->route('home');
        } else {
            // Redirect ke halaman login dengan error jika gagal login
            return redirect()->route('login')
                ->withErrors('Username & password tidak sesuai')
                ->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
