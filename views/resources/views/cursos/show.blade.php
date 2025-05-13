@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes do Curso</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $curso->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $curso->nome }}</td>
        </tr>
        <tr>
            <th>Sigla</th>
            <td>{{ $curso->sigla }}</td>
        </tr>
        <tr>
            <th>Total de Horas</th>
            <td>{{ $curso->total_horas }}</td>
        </tr>
        <tr>
            <th>Nível</th>
            <td>{{ $curso->nivel->nome }}</td>
        </tr>
        <tr>
            <th>Eixo</th>
            <td>{{ $curso->eixo->nome }}</td>
        </tr>
    </table>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

