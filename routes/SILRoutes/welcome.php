<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SIL\WelcomeController;

/**
 * Route Welcome
 */

Route::get('/sil', [WelcomeController::class, 'index'])->name('welcome-pegawai')->middleware('auth.user:admin,pegawai');
