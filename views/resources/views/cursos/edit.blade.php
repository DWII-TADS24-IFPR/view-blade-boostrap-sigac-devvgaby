@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Curso</h2>

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $curso->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <input type="text" class="form-control" id="sigla" name="sigla" value="{{ $curso->sigla }}" required>
        </div>

        <div class="mb-3">
            <label for="total_horas" class="form-label">Total de Horas</label>
            <input type="number" step="0.01" class="form-control" id="total_horas" name="total_horas" value="{{ $curso->total_horas }}" required>
        </div>

        <div class="mb-3">
            <label for="nivel_id" class="form-label">Nível</label>
            <select class="form-select" id="nivel_id" name="nivel_id" required>
                <option value="">Selecione o Nível</option>
                @foreach($niveis as $nivel)
                    <option value="{{ $nivel->id }}" @if($curso->nivel_id == $nivel->id) selected @endif>{{ $nivel->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="eixo_id" class="form-label">Eixo</label>
            <select class="form-select" id="eixo_id" name="eixo_id" required>
                <option value="">Selecione o Eixo</option>
                @foreach($eixos as $eixo)
                    <option value="{{ $eixo->id }}" @if($curso->eixo_id == $eixo->id) selected @endif>{{ $eixo->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
