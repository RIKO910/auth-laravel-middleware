<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('master');
});

Route::resource('login', LoginController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('registration', RegistrationController::class);
