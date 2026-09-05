<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private static array $alunos = [
        1 => ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao@email.com'],
        2 => ['id' => 2, 'nome' => 'Maria Souza', 'email' => 'maria@email.com'],
    ];

    public function index()
    {
        return view('alunos.index', ['alunos' => self::$alunos]);
    }
    public function show($id)
    {
        $aluno = self::$alunos[$id] ?? null;
        return view('alunos.show', ['aluno' => $aluno]);
    }

    public function create()
    {
        return "Formulário de criação de aluno.";
    }

    public function store(Request $request)
    {
        return "Aluno cadastrado!";
    }

    public function edit($id)
    {
        return "Formulário de edição do aluno {$id}.";
    }

    public function update(Request $request, $id)
    {
        return "Aluno {$id} atualizado";
    }

    public function destroy($id)
    {
        return "Aluno {$id} removido ";
    }
}