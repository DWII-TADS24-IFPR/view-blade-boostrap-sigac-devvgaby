@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalhes do Nível</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $nivel->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $nivel->nome }}</td>
        </tr>
    </table>

    <a href="{{ route('niveis.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

