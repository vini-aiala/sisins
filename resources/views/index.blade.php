@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/index.css">
@endsection

@section('title', 'Inscrição Share')

@section('main')
    <div class="row align-items-center justify-content-center">
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
