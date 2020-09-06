@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    <script type="text/javascript">
        /* Máscaras ER */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('telefone').onkeyup = function(){
                mascara( this, mtel );
            }
        }
    </script>
@endsection

@section('title', 'Cadastro Share')

@section('main')
    <img alt="Logo da Share" class="logo" src="../img/share-logo.png">


    <div class="col-md-7 justify-content-center">
        <h1>Cadastro</h1>
        @if($errors->any())
            @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" required autocomplete="name">
            </div>
            <div class="form-group">
                <label for="email">Endereço de e-mail</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email">
                <small id="emailHelp" class="form-text text-muted">Será enviado uma confirmação posteriormente.</small>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                <small id="passwordHelp" class="form-text text-muted">A senha deve ter 8 caracteres no mínimo.</small>
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirme sua senha</label>
                <input type="password" class="form-control @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="data-nascimento">Data de nascimento</label>
                <input type="date" class="form-control @error('data_nascimento') is-invalid @enderror" id="data_nascimento" name="data_nascimento" max="2010-01-01" min="1920-01-01" required autocomplete="bday">
            </div>
            <div class="form-group">
                <label for="telefone">Número de telefone</label>
                <input type="tel" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" pattern="\(\d{2}\) \d?\d{4}-\d{4}" placeholder="Exemplo: (99) 9999-9999 ou (99) 99999-9999" required autocomplete="tel-areacode">
                <small id="telefoneHelp" class="form-text text-muted">Utilize um número de telefone pessoal, será a principal forma de comunicação.</small>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
