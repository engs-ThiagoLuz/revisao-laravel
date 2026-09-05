<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Grandioso sobre.';
});

Route::get('/alunos', function () {
    return 'Alunos endividados.';
});

Route::get('/contato', function () {
    return 'Me liga.';
});