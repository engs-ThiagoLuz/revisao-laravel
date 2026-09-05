@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    @if ($errors->any())
        <div class="erros">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ old('curso') }}">

        <button type="submit">Salvar</button>
    </form>
@endsection