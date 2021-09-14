<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', [UsuariosController::class, 'index']);
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::post('/usuarios/search', [UsuariosController::class, 'search']);
Route::get('/usuarios/create', [UsuariosController::class, 'create']);
Route::post('/usuarios', [UsuariosController::class, 'store']);
Route::get('/usuarios/{id}/edit', [UsuariosController::class, 'edit']);
Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);
Route::delete('/usuarios/{id}/destroy', [UsuariosController::class, 'destroy']);
