<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PermintaanController;

Route::get('/', function () {
    return view('realindex');
});

Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/permintaan/create', [PermintaanController::class, 'create'])->name('permintaan.create');
Route::post('/permintaan', [PermintaanController::class, 'store'])->name('permintaan.store');
