<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [ModulController::class, 'home'])->name('home');
