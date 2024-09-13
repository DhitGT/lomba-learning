<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\SesiController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

// pengecekan account jika user sudah pernah login
Route::middleware(['guest'])->group(function (){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function ()
{
    return redirect('/user');
});

Route::get('/', [ModulController::class, 'home'])->name('home');

Route::get('/create', [ModulController::class, 'create'])->name('moduls.create');
Route::post('/moduls/create', [ModulController::class, 'store'])->name('moduls.store');
Route::get('/module/{id}', [ModulController::class, 'show'])->name('module.show');

Route::get('profile/{username}', [UserController::class, 'show'])->name('profile.show');


Route::middleware(['auth'])->group(function (){
    Route::get('/user', [AdminController::class, 'index']);
    Route::get('/operator', [AdminController::class, 'operator']);
    Route::get('/logout', [SesiController::class, 'logout']);
});
