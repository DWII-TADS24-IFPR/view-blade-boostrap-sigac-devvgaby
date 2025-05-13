@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Lista de Alunos</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Novo Aluno</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Curso</th>
                <th>Turma</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->curso->nome ?? '-' }}</td>
                    <td>{{ $aluno->turma->id ?? '-' }}</td>
                    <td>
                        <a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
