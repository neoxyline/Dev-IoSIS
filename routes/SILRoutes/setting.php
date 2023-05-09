<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

Route::middleware('auth')->prefix('setting')->group(function () {

  Route::get('/', function () {
    return view('pegawai\settings');
  })->name('setting');

});
