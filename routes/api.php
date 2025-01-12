<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\AlimentosController;




Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('categorias/{id}', [CategoriasController::class, 'show']);

Route::get('/alimentos', [AlimentosController::class, 'index']);
