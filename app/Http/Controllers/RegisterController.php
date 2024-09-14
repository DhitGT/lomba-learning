<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'name' => $validatedData['name'],
            'role' => 'user',
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Optionally, log the user in and redirect
        auth()->login($user);

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    public function addFromAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'role' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'name' => $validatedData['name'],
            'role' =>  $validatedData['role'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Optionally, log the user in and redirect
        auth()->login($user);

        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
