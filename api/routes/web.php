<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});


//Inicio Api
// Route::get('movies', [MovieController::class, 'index']);
// Route::get('movies/{id}', [MovieController::class, 'show']);
// Route::post('movies', [MovieController::class, 'store']);
//Fin Api