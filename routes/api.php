<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\AlimentosController;




Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('categorias/{id}', [CategoriasController::class, 'show']);

Route::get('/alimentos', [AlimentosController::class, 'index']);
Route::get('/alimentosFull', [AlimentosController::class, 'indexFull']);
Route::get('/alimentos/{id}', [AlimentosController::class, 'show']);
Route::get('/alimentosFull/{id}', [AlimentosController::class, 'showFull']);
