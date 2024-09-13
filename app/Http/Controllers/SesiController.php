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

    function login(Request $request){

        // pengecekan account 
        $infoLogin = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];
        if(Auth::attempt(credentials: $infoLogin)){
            if(Auth::user()->role == 'operator'){
                return redirect('operator');
            } else {
                return redirect('user');
            }
        } else {
            return redirect('') -> withErrors('username & password tidak sesuai') -> withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/'); 
    }
}
