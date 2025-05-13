@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Categorias</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Adicionar Nova Categoria</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Máximo de Horas</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->maximo_horas }}</td>
                <td>{{ $categoria->curso->nome }}</td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                    <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Visualizar Categoria</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
