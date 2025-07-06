<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/login', function() { return 'Login'; });

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; });
    Route::get('/fornecedores', function() { return 'Fornecedores'; });
    Route::get('/produtos', function() { return 'Produtos'; });
});