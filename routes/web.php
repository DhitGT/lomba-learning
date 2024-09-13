<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\SesiController;

// pengecekan account jika user sudah pernah login
Route::middleware(['guest'])->group(function (){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () 
{
    return redirect('/user');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/user', [AdminController::class, 'index']);
    Route::get('/operator', [AdminController::class, 'operator']);
    Route::get('/logout', [SesiController::class, 'logout']);
});
