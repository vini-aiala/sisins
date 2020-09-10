@extends('layouts.layout')

@section('css')
    /*<link rel="stylesheet" type="text/css" href="../css/login.css">*/
@endsection

@section('title', 'Login Share')

@section('navbar')
    @include('components.guest-navbar')
@endsection

@section('main')
        @if($errors->any())
            @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif
    <div class="row align-items-center justify-content-center mt-5">
        <div>
            <img alt="Logo da Share" class="logo" src="../img/share-logo.png">
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Lembrar-me
                        </label>
                    </div>
                </div>

                <div class="form-group row mx-auto">
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Esqueceu sua senha?
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
