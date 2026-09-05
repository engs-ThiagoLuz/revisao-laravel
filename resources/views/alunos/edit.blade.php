@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar Aluno</h1>

    @if ($errors->any())
        <div class="erros">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $aluno->nome) }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $aluno->email) }}">

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ old('curso', $aluno->curso) }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection