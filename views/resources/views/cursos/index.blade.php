@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Lista de Cursos</h2>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3">Novo Curso</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Total de Horas</th>
                <th>Nível</th>
                <th>Eixo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->sigla }}</td>
                    <td>{{ $curso->total_horas }}</td>
                    <td>{{ $curso->nivel->nome }}</td>
                    <td>{{ $curso->eixo->nome }}</td>
                    <td>
                        <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
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
