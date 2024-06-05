<?php

use App\Http\Controllers\HabitantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

Route::resource('/villes',VilleController::class);
Route::resource('/habitants',HabitantController::class)->except('create');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('guest.register');
Route::post('register/store', [RegisterController::class, 'register']);
