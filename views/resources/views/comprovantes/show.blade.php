@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes do Comprovante #{{ $comprovante->id }}</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Horas:</strong> {{ $comprovante->horas }}</li>
        <li class="list-group-item"><strong>Atividade:</strong> {{ $comprovante->atividade }}</li>
        <li class="list-group-item"><strong>Categoria:</strong> {{ $comprovante->categoria->nome ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Aluno:</strong> {{ $comprovante->aluno->nome ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Usuário:</strong> {{ $comprovante->user->name ?? 'N/A' }}</li>
    </ul>

    <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection

