@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Lista de Turmas</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('turmas.create') }}" class="btn btn-primary mb-3">Nova Turma</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
                <tr>
                    <td>{{ $turma->id }}</td>
                    <td>{{ $turma->curso->nome }}</td>
                    <td>{{ $turma->ano }}</td>
                    <td>
                        <a href="{{ route('turmas.edit', $turma->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

