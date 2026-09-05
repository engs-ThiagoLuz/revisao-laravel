<?php


use App\Models\Aluno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/sobre', function () {
    return 'Grandioso sobre.';
});

Route::get('/alunos', function () {
    return 'Alunos endividados.';
});

Route::get('/contato', function () {
    return 'Me liga.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto com ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria com ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário com ID: {$id}";
});

Route::resource('alunos', AlunoController::class);

Route::get('/alunos/curso/{curso}', function ($curso) {
    return Aluno::doCurso($curso)->get();
});

Route::get('/alunos/busca/{palavra}', function ($palavra) {
    return Aluno::nomeContem($palavra)->get();
});

Route::get('/alunos/recentes', function () {
    return Aluno::recentes()->get();
});

Route::get('/alunos/quantidade', function () {
    return Aluno::count();
});