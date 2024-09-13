<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegisterController;

// Halaman utama menampilkan home.blade.php
Route::get('/', [ModulController::class, 'home'])->name('home');

// Menampilkan login jika user belum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});


Route::get('/module/{id}', [ModulController::class, 'show'])->name('module.show');

// Halaman yang hanya bisa diakses jika user sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ModulController::class, 'home'])->name('home');
    Route::get('/create', [ModulController::class, 'create'])->name('moduls.create');
    Route::post('/moduls/create', [ModulController::class, 'store'])->name('moduls.store');
    Route::get('/profile/{username}', [UserController::class, 'show'])->name('profile.show');
    Route::get('/operator', [AdminController::class, 'operator']);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [OperatorController::class, 'dashboard'])->name('admin.dashboard');
    Route::put('/post/{id}/accept', [OperatorController::class, 'acceptPost'])->name('admin.post.accept');
    Route::put('/post/{id}/reject', [OperatorController::class, 'rejectPost'])->name('admin.post.reject');
});

Route::get('/register', function () {
    return view('register'); // Adjust view path if necessary
})->name('register.show');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
