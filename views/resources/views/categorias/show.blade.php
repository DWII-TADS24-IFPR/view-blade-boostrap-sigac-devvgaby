@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes da Categoria: {{ $categoria->nome }}</h2>

    <div class="mb-3">
        <strong>Nome:</strong> {{ $categoria->nome }}
    </div>

    <div class="mb-3">
        <strong>Máximo de Horas:</strong> {{ $categoria->maximo_horas }}
    </div>

    <div class="mb-3">
        <strong>Curso:</strong> {{ $categoria->curso->nome }}
    </div>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

