@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes do Documento</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $documento->id }}</td>
        </tr>
        <tr>
            <th>URL</th>
            <td>{{ $documento->url }}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{ $documento->descricao }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $documento->status }}</td>
        </tr>
        <tr>
            <th>Horas Início</th>
            <td>{{ $documento->horas_in }}</td>
        </tr>
        <tr>
            <th>Horas Fim</th>
            <td>{{ $documento->horas_out }}</td>
        </tr>
        <tr>
            <th>Categoria</th>
            <td>{{ $documento->categoria->nome }}</td>
        </tr>
        <tr>
            <th>Usuário</th>
            <td>{{ $documento->user->nome }}</td>
        </tr>
    </table>

    <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

