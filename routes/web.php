<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

// home
Route::get('/', function () {
    return view('home');
});

// login
Route::get('/login', [LoginController::class, 'index']);

// Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'index']);