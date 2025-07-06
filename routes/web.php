<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'Suporte de TI') 
    {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
    }
);
