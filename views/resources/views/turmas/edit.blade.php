@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Turma</h2>

    <form action="{{ route('turmas.update', $turma->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" class="form-control" required>
                <option value="">Selecione o Curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $turma->curso_id == $curso->id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ $turma->ano }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection

