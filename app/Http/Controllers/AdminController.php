<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "Hello, Welcome";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'> Logout </a>";
    }

    function operator(){
        echo "Hello, Welcome Operator";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'> Logout </a>";
    }
    
    function guru(){
        echo "Hello, Welcome Guru";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout> Logout </a>";
    }
}
