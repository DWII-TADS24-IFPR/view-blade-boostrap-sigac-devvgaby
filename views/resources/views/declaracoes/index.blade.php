@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Lista de Declarações</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('declaracoes.create') }}" class="btn btn-primary mb-3">Nova Declaração</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hash</th>
                <th>Data</th>
                <th>Aluno</th>
                <th>Comprovante</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($declaracoes as $declaracao)
                <tr>
                    <td>{{ $declaracao->id }}</td>
                    <td>{{ $declaracao->hash }}</td>
                    <td>{{ $declaracao->data }}</td>
                    <td>{{ $declaracao->aluno->nome }}</td>
                    <td>{{ $declaracao->comprovante->atividade }}</td>
                    <td>
                        <a href="{{ route('declaracoes.show', $declaracao->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('declaracoes.edit', $declaracao->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('declaracoes.destroy', $declaracao->id) }}" method="POST" style="display:inline;">
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

