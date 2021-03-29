<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('movie/{movie_id}', [MovieController::class, 'show'])->name('show');
