<?php

use App\Http\Controllers\HabitantController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

Route::resource('/villes',VilleController::class);
Route::resource('/habitants',HabitantController::class);


