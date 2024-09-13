<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\SesiController;

// halaman utama
Route::get('/', function () {
    return view('home');
});

// menampilkan halaman login
Route::get('/login', function () {
    return view('login');
});










// menampilkan login jika user belum pernah pernah login
Route::middleware(['guest'])->group(function (){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/', [ModulController::class, 'home'])->name('home');
Route::get('/module/{id}', [ModulController::class, 'show'])->name('module.show');

// halaman yang dapat di akses ketika user sudah pernah login
Route::middleware(['auth'])->group(function (){
    Route::get('/user', [AdminController::class, 'index']);
    Route::get('/create', [ModulController::class, 'create'])->name('moduls.create');
    Route::get('profile/{username}', [UserController::class, 'show'])->name('profile.show');
    Route::post('/moduls/create', [ModulController::class, 'store'])->name('moduls.store');
    Route::get('/operator', [AdminController::class, 'operator']);
    Route::get('/logout', [SesiController::class, 'logout']);
});
