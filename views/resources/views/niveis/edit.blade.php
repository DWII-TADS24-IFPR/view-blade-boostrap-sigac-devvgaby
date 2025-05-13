@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Nível</h2>

    <form action="{{ route('niveis.update', $nivel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Nível</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $nivel->nome }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection

