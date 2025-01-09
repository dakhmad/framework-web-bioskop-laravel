<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');

Route::resource('/movies', MoviesController::class);
