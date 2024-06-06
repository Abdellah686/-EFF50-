<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HabitantController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login/store', [AuthController::class, 'login']);
Route::resource('/villes',VilleController::class);


// Group routes that require authentication
Route::middleware('auth')->group(function() {
    // Resource controller for habitants
    Route::resource('/habitants', HabitantController::class);

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route to show a habitant's profile and habitants in the same city
    Route::get('/habitants/{id}', [HabitantController::class, 'show'])->name('habitants.show');
});



