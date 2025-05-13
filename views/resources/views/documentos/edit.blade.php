@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Documento</h2>

    <form action="{{ route('documentos.update', $documento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ $documento->url }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $documento->descricao }}" required>
        </div>

        <div class="mb-3">
            <label for="horas_in" class="form-label">Horas Início</label>
            <input type="number" step="0.01" class="form-control" id="horas_in" name="horas_in" value="{{ $documento->horas_in }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $documento->status }}" required>
        </div>

        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <input type="text" class="form-control" id="comentario" name="comentario" value="{{ $documento->comentario }}">
        </div>

        <div class="mb-3">
            <label for="horas_out" class="form-label">Horas Fim</label>
            <input type="number" step="0.01" class="form-control" id="horas_out" name="horas_out" value="{{ $documento->horas_out }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione a Categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if($documento->categoria_id == $categoria->id) selected @endif>{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuário</label>
            <select class="form-select" id="user_id" name="user_id" required>
                <option value="">Selecione o Usuário</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @if($documento->user_id == $user->id) selected @endif>{{ $user->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection

