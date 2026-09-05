<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        return view('alunos.create');
    }

   public function store(AlunoRequest $request)
{
    Aluno::create($request->validated());
    return redirect()->route('alunos.index')->with('sucesso', 'Aluno cadastrado com sucesso!');
}

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, $id)
{
    $aluno = Aluno::findOrFail($id);
    $aluno->update($request->validated());
    return redirect()->route('alunos.index')->with('sucesso', 'Aluno atualizado com sucesso!');
}

    public function destroy($id)
    {
        Aluno::findOrFail($id)->delete();
        return redirect()->route('alunos.index')->with('sucesso', 'Aluno removido com sucesso!');
    }
}

