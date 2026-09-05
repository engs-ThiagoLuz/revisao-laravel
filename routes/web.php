<?php

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

Route::get('/alunos-crud', [AlunoController::class, 'index']);
Route::get('/alunos-crud/create', [AlunoController::class, 'create']);
Route::post('/alunos-crud', [AlunoController::class, 'store']);
Route::get('/alunos-crud/{id}', [AlunoController::class, 'show']);
Route::get('/alunos-crud/{id}/edit', [AlunoController::class, 'edit']);
Route::put('/alunos-crud/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos-crud/{id}', [AlunoController::class, 'destroy']);

use App\Models\Aluno;

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