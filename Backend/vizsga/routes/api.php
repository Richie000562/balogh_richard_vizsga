<?php

use App\Http\Controllers\EsemenyController;
use App\Http\Controllers\KategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



   Route::get('/esemenyek',         [EsemenyController::class, 'index']);
   Route::get('/kategoriak',         [EsemenyController::class, 'index']);
    // Route::get('/kategoriak',    [KategoriaController::class, 'show']);
    Route::put('/esemeny',    [EsemenyController::class, 'update']);
    Route::delete('/esemenyek/{id}', [EsemenyController::class, 'destroy']);
