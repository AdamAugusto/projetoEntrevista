<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\HomeController;
use App\Models\Categoria;
use App\Models\Chamado;
use App\Models\Situacao;
use Illuminate\Support\Facades\Route;

Route::get('/list', [HomeController::class, 'list']);
Route::get('/chamado/cadastro', [ChamadoController::class, 'show']);
Route::get('/categoria/cadastro', [CategoriaController::class, 'show']);
Route::post('/categoria/store', [CategoriaController::class, 'store']);
Route::post('/chamado/store', [ChamadoController::class, 'store']);
Route::post('/chamado/atender/{id}', [ChamadoController::class, 'atender']);
Route::post('/chamado/finalizar/{id}', [ChamadoController::class, 'finalizar']);
Route::post('/chamado/delete/{id}', [ChamadoController::class, 'delete']);
Route::get('/', [ChamadoController::class, 'relatorio']);