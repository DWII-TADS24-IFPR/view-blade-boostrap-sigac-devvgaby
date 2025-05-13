@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Categoria</h2>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome', $categoria->nome) }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="maximo_horas" class="form-label">Máximo de Horas</label>
            <input type="number" class="form-control @error('maximo_horas') is-invalid @enderror" id="maximo_horas" name="maximo_horas" value="{{ old('maximo_horas', $categoria->maximo_horas) }}" required>
            @error('maximo_horas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select class="form-select @error('curso_id') is-invalid @enderror" id="curso_id" name="curso_id" required>
                <option value="">Selecione um curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id', $categoria->curso_id) == $curso->id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                @endforeach
            </select>
            @error('curso_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Atualizar Categoria</button>
    </form>
</div>
@endsection

