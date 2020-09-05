@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/index.css">
@endsection

@section('title', 'Inscrição Share')

@section('main')
    <div class="row">
        <div class="col s12 m0 l3"></div>
        <div class="col s12 m12 l3">
            <div class="card">
                <div class="card-image">
                    <img alt="Logo da Share" class="logo" src="../img/share-logo.png">
                </div>
            </div>
        </div>
        <div class="center col s12 m12 l3">
            <a href="cadastro.html" class="center cadastro waves-effect waves-light btn">Fazer cadastro</a>
            <br>
            <a href="login.html" class="center login waves-effect waves-light btn">Já tenho cadastro</a>
        </div>
        <div class="col s12 m0 l3"></div>
    </div>
@endsection
