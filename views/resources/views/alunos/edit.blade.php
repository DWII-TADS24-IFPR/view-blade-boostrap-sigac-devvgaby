@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Aluno</h2>

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome', $aluno->nome) }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ old('cpf', $aluno->cpf) }}" required>
            @error('cpf')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <select class="form-select @error('email') is-invalid @enderror" id="email" name="email" required>
                <option value="">Selecione um e-mail</option>
                @foreach($users as $user)
                    <option value="{{ $user->email }}" {{ old('email', $aluno->email) == $user->email ? 'selected' : '' }}>
                        {{ $user->email }}
                    </option>
                @endforeach
            </select>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control @error('senha') is-invalid @enderror" id="senha" name="senha" value="{{ old('senha') }}" placeholder="Digite a nova senha (se desejar alterar)">
            @error('senha')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuário</label>
            <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required>
                <option value="">Selecione um usuário</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $aluno->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->nome }}
                    </option>
                @endforeach
            </select>
            @error('user_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select class="form-select @error('curso_id') is-invalid @enderror" id="curso_id" name="curso_id" required>
                <option value="">Selecione um curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id', $aluno->curso_id) == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
            @error('curso_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="turma_id" class="form-label">Turma</label>
            <select class="form-select @error('turma_id') is-invalid @enderror" id="turma_id" name="turma_id" required>
                <option value="">Selecione uma turma</option>
                @foreach($turmas as $turma)
                    <option value="{{ $turma->id }}" {{ old('turma_id', $aluno->turma_id) == $turma->id ? 'selected' : '' }}>
                        {{ $turma->ano }}
                    </option>
                @endforeach
            </select>
            @error('turma_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Aluno</button>
    </form>
</div>
@endsection


