@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes do Aluno</h2>

    <ul>
        <li><strong>Nome:</strong> {{ $aluno->nome }}</li>
        <li><strong>CPF:</strong> {{ $aluno->cpf }}</li>
        <li><strong>Email:</strong> {{ $aluno->email }}</li>
        <li><strong>Curso:</strong> {{ $aluno->curso->nome ?? 'N/A' }}</li>
        <li><strong>Turma:</strong> {{ $aluno->turma->ano ?? 'N/A' }}</li>
    </ul>

    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

