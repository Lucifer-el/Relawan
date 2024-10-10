<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route untuk halaman home
Route::get('/', function () {
    return view('realindex');
});

// Route untuk login (hanya dapat diakses oleh tamu yang belum login)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Form login
    Route::post('/authenticate', [LoginController::class, 'login'])->name('login-proses'); // Proses login
});

// Route untuk dashboard yang dilindungi middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Dashboard
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Logout
});

// Route lainnya (contoh rute untuk ObatController dan PermintaanController)
Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/permintaan/create', [PermintaanController::class, 'create'])->name('permintaan.create');
Route::post('/permintaan', [PermintaanController::class, 'store'])->name('permintaan.store');
