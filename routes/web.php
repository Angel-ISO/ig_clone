<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;


Route::get('/', [HomeController::class, 'inicio']);
Route::get('/crear-cuenta', [RegisterController::class, 'index']);

