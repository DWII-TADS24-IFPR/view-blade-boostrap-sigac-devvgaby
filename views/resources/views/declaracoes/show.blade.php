@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes da Declaração</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $declaracao->id }}</td>
        </tr>
        <tr>
            <th>Hash</th>
            <td>{{ $declaracao->hash }}</td>
        </tr>
        <tr>
            <th>Data</th>
            <td>{{ $declaracao->data }}</td>
        </tr>
        <tr>
            <th>Aluno</th>
            <td>{{ $declaracao->aluno->nome }}</td>
        </tr>
        <tr>
            <th>Comprovante</th>
            <td>{{ $declaracao->comprovante->atividade }}</td>
        </tr>
    </table>

    <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

