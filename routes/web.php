<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// home
Route::get('/', function () {
    return view('home');
});

// login
Route::get('/login', [LoginController::class, 'index']);