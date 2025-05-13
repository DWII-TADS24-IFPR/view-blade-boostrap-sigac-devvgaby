@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Lista de Níveis</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('niveis.create') }}" class="btn btn-primary mb-3">Novo Nível</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($niveis as $nivel)
                <tr>
                    <td>{{ $nivel->id }}</td>
                    <td>{{ $nivel->nome }}</td>
                    <td>
                        <a href="{{ route('niveis.edit', $nivel->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('niveis.destroy', $nivel->id) }}" method="POST" style="display:inline;">
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

