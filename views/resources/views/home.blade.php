@extends('layouts.app')

@section('title', 'Início')

@section('content')
<div class="text-center mt-5">
    <h1 class="mb-4">Bem-vindo ao <span class="text-primary">SIGAC</span></h1>
    <p class="lead">Escolha uma seção para acessar:</p>
</div>

<div class="row g-3 mt-4">
    @php
        $links = [
            ['Alunos', 'alunos.index', 'primary'],
            ['Cursos', 'cursos.index', 'secondary'],
            ['Categorias', 'categorias.index', 'success'],
            ['Comprovantes', 'comprovantes.index', 'danger'],
            ['Declarações', 'declaracoes.index', 'dark'],
            ['Documentos', 'documentos.index', 'info'],
            ['Níveis', 'niveis.index', 'warning'],
            ['Turmas', 'turmas.index', 'primary']
        ];
    @endphp

    @foreach($links as [$label, $route, $color])
        <div class="col-md-3 col-sm-6">
            <a href="{{ route($route) }}" class="btn btn-outline-{{ $color }} w-100 shadow-sm">
                {{ $label }}
            </a>
        </div>
    @endforeach
</div>
@endsection


