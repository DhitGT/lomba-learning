<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModulController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/', [ModulController::class, 'home'])->name('home');

Route::get('/create', [ModulController::class, 'create'])->name('moduls.create');
Route::post('/moduls/create', [ModulController::class, 'store'])->name('moduls.store');
Route::get('/module/{id}', [ModulController::class, 'show'])->name('module.show');

 Route::get('profile/{username}', [UserController::class, 'show'])->name('profile.show');
