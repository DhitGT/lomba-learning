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

<<<<<<< HEAD
    function login(Request $request){

        // pengecekan account
=======
    function login(Request $request)
    {
        // Pengecekan account
>>>>>>> 70d5e5e307d518b08092af5c9356a1fb6a7ea3e9
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
<<<<<<< HEAD
        return redirect('/');
=======
        return redirect()->route('login');
>>>>>>> 70d5e5e307d518b08092af5c9356a1fb6a7ea3e9
    }
}
