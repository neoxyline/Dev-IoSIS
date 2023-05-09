<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Auth\LoginSILController;

use App\Http\Controllers\Auth\LoginWebsiteController;

/*
 ***********************
 * Route Login Pegawai *
 ***********************
 */

Route::middleware('guest')->prefix('auth/login')->group(function () {

  Route::get('/', [LoginSILController::class, 'create'])->name('login');

  Route::post('/', [LoginSILController::class, 'store'])->name('login');

});

/*
 *************************
 * Route Login Pelanggan *
 *************************
 */

Route::middleware('guest')->prefix('auth/login-pelanggan')->group(function () {

  Route::get('/', [LoginWebsiteController::class, 'create'])->name('login-pelanggan');

  Route::post('/', [LoginWebsiteController::class, 'store'])->name('login-pelanggan');

});
