@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    @if ($aluno)
        <h1>{{ $aluno['nome'] }}</h1>
        <p>Email: {{ $aluno['email'] }}</p>
    @else
        <p>Aluno não encontrado.</p>
    @endif
@endsection