<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);