<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\BerandaController;

use App\Http\Controllers\Website\DaftarController;

use App\Http\Controllers\Website\VerifikasiDaftarController;

use App\Http\Controllers\Website\LoginController;


/**
 * beranda
 */

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

/**
 * Daftar
 */

Route::get('/daftar', [DaftarController::class, 'create'])->name('daftar');

Route::post('/daftar', [DaftarController::class, 'storeRedirectToVerifikasi'])->name('daftar');

Route::get('/daftar/google', [DaftarController::class, 'redirectToGoogle'])->name('daftar-google-redirect');

Route::get('/daftar/google/callback', [DaftarController::class, 'handleGoogleCallback'])->name('daftar-google-callback');

/**
 * Verifikasi daftar
 */

Route::get('/daftar/verifikasi', [VerifikasiDaftarController::class, 'index'])->name('daftar-verifikasi');
Route::post('/daftar/verifikasi/email', [VerifikasiDaftarController::class, 'sendVerificationCodeToEmail'])->name('daftar-verifikasi-email');
Route::get('/daftar/verifikasi/email', [VerifikasiDaftarController::class, 'konfirmVerificationCode'])->name('daftar-verifikasi-email');

/**
 * Login
 */

Route::get('/masuk', [LoginController::class, 'create'])->name('masuk');
// Route::get('/masuk/google', [LoginController::class, 'create'])->name('masuk');
// Route::get('/masuk/google/callback', [LoginController::class, 'redirectToGoogle'])->name('masuk-google-callback');
