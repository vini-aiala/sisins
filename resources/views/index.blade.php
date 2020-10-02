@extends('layouts.layout')

@section('css')
    <link href="/css/index.css" rel="stylesheet" type="text/css">
@endsection

@section('title', 'Sistema de Inscrições · Início')

@section('navbar')
    @include('components.guest-navbar')
@endsection

@section('main')
    <div class="row align-items-center justify-content-center mt-5">
        <div>
            <img alt="Logo da Share" class="logo" src="../img/share-logo.png">
        </div>
        <div class="d-flex flex-column">
            <a href="{{ route('login') }}" class="btn login" role="button">
                Já tenho cadastro
            </a>
            <br>
            <a href="{{ route('register') }}" class="btn cadastro" role="button">
                Fazer cadastro
            </a>
        </div>
    </div>
@endsection
