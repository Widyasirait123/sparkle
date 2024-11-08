<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\zonaController;

// Autentikasi
Route::get('/', [loginController::class, 'index'])->name('login');
Route::get('/registrasi', [registrasiController::class, 'index'])->name('registrasi');
Route::post('/logout', [loginController::class, 'index'])->name('logout');

// Dahboard
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

// fitur  utama
Route::prefix('zona')->name('zona.')->group(function () {
    Route::get('/1', [ZonaController::class, 'zona1'])->name('1');
    Route::get('/2', [ZonaController::class, 'zona2'])->name('2');
    Route::get('/3', [ZonaController::class, 'zona3'])->name('3');
    Route::get('/4', [ZonaController::class, 'zona4'])->name('4');
    Route::get('/5', [ZonaController::class, 'zona5'])->name('5');
    Route::get('/6', [ZonaController::class, 'zona6'])->name('6');
});