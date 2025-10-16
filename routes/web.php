<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// 👇 Landing page (non-login)
Route::get('/', function () {
    return view('landing'); // file: resources/views/landing.blade.php
})->name('landing');

//about us
Route::get('/aboutUs', function () {
    return view('aboutUs'); // Mengarah ke resources/views/aboutUs.blade.php
})->name('aboutUs');

Route::get('/program', function () {
    return view('partials.program'); // Asumsi Anda punya file program.blade.php
})->name('program'); // Untuk menu "Program"

Route::get('/kontak', function () {
    return view('kontak'); // Asumsi Anda punya file kontak.blade.php
})->name('kontak'); // Untuk menu "Kontak"

Route::get('/bootcamp', function () {
    return view('bootcamp');
})->name('bootcamp');

Route::get('/course', function () {
    return view('course');
})->name('course');

Route::get('/sertifikat', function () {
    return view('sertifikat');
})->name('sertifikat');

Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');


// 👇 Auth routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 👇 Dashboard hanya bisa diakses setelah login
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
