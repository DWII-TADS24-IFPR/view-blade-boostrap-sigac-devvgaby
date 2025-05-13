@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Cadastrar Declaração</h2>

    <form action="{{ route('declaracoes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="hash" class="form-label">Hash</label>
            <input type="text" class="form-control" id="hash" name="hash" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="datetime-local" class="form-control" id="data" name="data" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select class="form-select" id="aluno_id" name="aluno_id" required>
                <option value="">Selecione o Aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="comprovante_id" class="form-label">Comprovante</label>
            <select class="form-select" id="comprovante_id" name="comprovante_id" required>
                <option value="">Selecione o Comprovante</option>
                @foreach($comprovantes as $comprovante)
                    <option value="{{ $comprovante->id }}">{{ $comprovante->atividade }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection

