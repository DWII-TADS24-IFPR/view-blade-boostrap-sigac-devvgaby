@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Cadastrar Comprovante</h2>

    <form action="{{ route('comprovantes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="horas" class="form-label">Horas</label>
            <input type="number" step="0.01" class="form-control" id="horas" name="horas" required>
        </div>

        <div class="mb-3">
            <label for="atividade" class="form-label">Atividade</label>
            <input type="text" class="form-control" id="atividade" name="atividade" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>   
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select class="form-select" id="aluno_id" name="aluno_id" required>
                <option value="">Selecione um aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuário</label>
            <select class="form-select" id="user_id" name="user_id" required>
                <option value="">Selecione um usuário</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Comprovante</button>
    </form>
</div>
@endsection


