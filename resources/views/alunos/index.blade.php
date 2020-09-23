@extends('layouts.layout')

@section('title', 'Sistema de Inscrições · Aluno')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/inscricoes.css">
@endsection

@section('navbar')
    @include('components.aluno-navbar')
@endsection

@section('main')
    <div class="row align-items-center justify-content-center mt-5">
        <div>
            <img alt="Logo da Share" class="logo" src="/img/share-logo.png">
        </div>
        <div class="d-flex flex-column">
            <a href="{{ route('alunos-edicao') }}" class="atualizar btn mx-auto">Atualizar perfil</a>
            <div class="card card-largura mt-3">
                <div class="card-header">
                    Seus cursos:
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span class="col p-0"><b>Violão</b></span>
                            <a href="#remove" class="secondary-content col-1 p-0"><i class="material-icons">delete</i></a>
                        </div>
                        <p class="col-12 p-0">Básico A - Quinta-feira, das 12:00 às 13:00</p>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span class="col p-0">Curso não selecionado</span>
                            <a class="col-1 p-0" href="{{ route('alunos-lista') }}" class="secondary-content">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
