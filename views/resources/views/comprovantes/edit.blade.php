@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Comprovante</h2>

    <form action="{{ route('comprovantes.update', $comprovante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="horas" class="form-label">Horas</label>
            <input type="number" step="0.01" class="form-control" id="horas" name="horas" value="{{ $comprovante->horas }}" required>
        </div>

        <div class="mb-3">
            <label for="atividade" class="form-label">Atividade</label>
            <input type="text" class="form-control" id="atividade" name="atividade" value="{{ $comprovante->atividade }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $comprovante->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select class="form-select" id="aluno_id" name="aluno_id" required>
                <option value="">Selecione um aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" {{ $comprovante->aluno_id == $aluno->id ? 'selected' : '' }}>{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuário</label>
            <select class="form-select" id="user_id" name="user_id" required>
                <option value="">Selecione um usuário</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $comprovante->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Comprovante</button>
    </form>
</div>
@endsection

