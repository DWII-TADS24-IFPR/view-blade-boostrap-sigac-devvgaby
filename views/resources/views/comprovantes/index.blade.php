@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Lista de Comprovantes</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('comprovantes.create') }}" class="btn btn-primary mb-3">Adicionar Comprovante</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Horas</th>
                    <th>Atividade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comprovantes as $comprovante)
                    <tr>
                        <td>{{ $comprovante->id }}</td>
                        <td>{{ $comprovante->horas }}</td>
                        <td>{{ $comprovante->atividade }}</td>
                        <td>
                            <a href="{{ route('comprovantes.show', $comprovante->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('comprovantes.edit', $comprovante->id) }}"
                                class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('comprovantes.destroy', $comprovante->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir Comprovante</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection