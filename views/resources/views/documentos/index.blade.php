@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Lista de Documentos</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('documentos.create') }}" class="btn btn-primary mb-3">Novo Documento</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Categoria</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
                <tr>
                    <td>{{ $documento->id }}</td>
                    <td>{{ $documento->descricao }}</td>
                    <td>{{ $documento->status }}</td>
                    <td>{{ $documento->categoria->nome }}</td>
                    <td>{{ $documento->user->nome }}</td>
                    <td>
                        <a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST" style="display:inline;">
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

