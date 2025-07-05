<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Olá, seja bem-vindo ao curso de Laravel!";
});

Route::get('/sobre', function () {
    return "Sobre nós!";
});

Route::get('/contato', function () {
    return "Contato!";
});
