@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes da Turma</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $turma->id }}</td>
        </tr>
        <tr>
            <th>Curso</th>
            <td>{{ $turma->curso->nome }}</td>
        </tr>
        <tr>
            <th>Ano</th>
            <td>{{ $turma->ano }}</td>
        </tr>
    </table>

    <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

