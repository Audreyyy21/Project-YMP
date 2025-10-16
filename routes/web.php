<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Public Pages (tanpa login)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/program', function () {
    return view('partials.program');
})->name('program');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard (hanya untuk user login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/bootcamp', [DashboardController::class, 'bootcamp'])->name('dashboard.bootcamp');
    Route::get('/course', [DashboardController::class, 'course'])->name('dashboard.course');
    Route::get('/sertifikat', [DashboardController::class, 'sertifikat'])->name('dashboard.sertifikat');
    Route::get('/transaksi', [DashboardController::class, 'transaksi'])->name('dashboard.transaksi');
});
