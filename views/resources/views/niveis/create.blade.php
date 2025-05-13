@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Cadastrar Nível</h2>

    <form action="{{ route('niveis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Nível</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection


