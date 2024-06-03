<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//listado de movies enviado la lógica en controlador
Route::get('movies', [MovieController::class, 'index']);

//obteniendo una movie por id
Route::get('movies/{id}', [MovieController::class, 'show']);

//guardar o crear un dato dentro de la BD usando un api
Route::post('movies', [MovieController::class, 'store']);

//actualiza un dato existente de la BD usando un api
Route::put('movies/{id}', [MovieController::class, 'update']);

//eliminar un dato existente de la BD usando un api
Route::delete('movies/{id}', [MovieController::class, 'delete']);