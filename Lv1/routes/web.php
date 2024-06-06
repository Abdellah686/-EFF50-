<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HabitantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

Route::resource('/villes',VilleController::class);
Route::resource('/habitants',HabitantController::class);


Route::get('/profile/{id}', [ProfileController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login/store', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);