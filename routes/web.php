<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Gate;

// Route untuk halaman home
Route::get('/', function () {
    return view('welcome');
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
    Route::resource('obat', ObatController::class);
    Route::post('/obat/create', [ObatController::class, 'create'])->name('obat.create');
    Route::get('/obat/{id_obat}/edit', [ObatController::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id_obat}', [ObatController::class, 'update'])->name('obat.update');
    Route::delete('/obat/destroy/{id_obat}', [ObatController::class, 'destroy'])->name('obat.destroy');

});

// Route lainnya (contoh rute untuk ObatController dan PermintaanController)
Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/permintaan/create', [PermintaanController::class, 'create'])->name('permintaan.create');
Route::post('/permintaan', [PermintaanController::class, 'store'])->name('permintaan.store');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Gate::define('update-obat', function ($user, $obat) {
    return $user->id === $obat->Obat;
});

//permintaan obat
Route::get('/permintaan-obat', [ObatController::class, 'createRequest'])->name('permintaan-obat.create');
Route::post('/permintaan-obat', [ObatController::class, 'storeRequest'])->name('permintaan-obat.store');
