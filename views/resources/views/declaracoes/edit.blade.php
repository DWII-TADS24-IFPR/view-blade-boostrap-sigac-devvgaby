@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Declaração</h2>

    <form action="{{ route('declaracoes.update', $declaracao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="hash" class="form-label">Hash</label>
            <input type="text" class="form-control" id="hash" name="hash" value="{{ $declaracao->hash }}" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="datetime-local" class="form-control" id="data" name="data" value="{{ $declaracao->data->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select class="form-select" id="aluno_id" name="aluno_id" required>
                <option value="">Selecione o Aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" @if($declaracao->aluno_id == $aluno->id) selected @endif>{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="comprovante_id" class="form-label">Comprovante</label>
            <select class="form-select" id="comprovante_id" name="comprovante_id" required>
                <option value="">Selecione o Comprovante</option>
                @foreach($comprovantes as $comprovante)
                    <option value="{{ $comprovante->id }}" @if($declaracao->comprovante_id == $comprovante->id) selected @endif>{{ $comprovante->atividade }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection

