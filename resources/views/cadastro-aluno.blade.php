@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
@endsection

@section('title', 'Cadastro Share')

@section('main')
    <img alt="Logo da Share" class="logo" src="../img/share-logo.png">
    <div class="mx-auto col-md-7 mb-5">
        <h1 class="text-center pt-4 pb-2">Dados do aluno</h1>
        @if($errors->any())
            @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif
        <form method="POST" class="justify-content-center" action="{{ route('cadastro-aluno') }}">
            @csrf
            <div class="form-group">
                <label for="categoria">Responda em qual categoria se encaixa</label>
                <select class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria" required>
                    <option value="" disabled selected></option>
                    <option value="Pessoas com vínculo com a UFSCar.">Pessoas com vínculo com a UFSCar.</option>
                    <option value="Alunos do terceiro ano do ensino médio (tendo no mínimo 16 anos)">Alunos do terceiro ano do ensino médio (tendo no mínimo 16 anos)</option>
                    <option value="Pessoas que não possuem vínculo com a UFSCar">Pessoas que não possuem vínculo com a UFSCar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tipo-vinculo">Se houver, qual o seu vínculo com a UFSCAR?</label>
                <select class="form-control @error('tipo-vinculo') is-invalid @enderror" id="tipo-vinculo" name="tipo-vinculo" required>
                    <option value="" disabled selected></option>
                    <option value="Professor">Professor</option>
                    <option value="Técnico-Administrativo (TAs)">Técnico-Administrativo (TAs)</option>
                    <option value="Aluno da Graduação">Aluno da Graduação</option>
                    <option value="Aluno da Pós Graduação">Aluno da Pós Graduação</option>
                    <option value="Outro">Outro</option>
                    <option value="Nenhum">Nenhum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ocupacao">Você é estudante e/ou trabalha?</label>
                <select class="form-control @error('ocupacao') is-invalid @enderror" id="ocupacao" name="ocupacao" required>
                    <option value="" disabled selected></option>
                    <option value="Trabalho e estudo">Trabalho e estudo</option>
                    <option value="Trabalho e não estudo">Trabalho e não estudo</option>
                    <option value="Não trabalho e estudo">Não trabalho e estudo</option>
                    <option value="Não trabalho e não estudo">Não trabalho e não estudo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="escola-em">Escola e cidade em que estuda (Se for aluno do ensino médio)</label>
                <input type="text" class="form-control @error('escola-em') is-invalid @enderror" id="escola-em" name="escola-em">
                <small id="escola-emHelp" class="form-text text-muted">Caso não seja aluno do ensino médio, deixe o campo em branco.</small>
            </div>
            <div class="form-group">
                <label for="edital">Você leu atentamente o edital?</label>
                <select class="form-control @error('edital') is-invalid @enderror" id="edital" name="edital" required>
                    <option value="" disabled selected></option>
                    <option value="Sim, li e estou ciente dos termos do processo seletivo">Sim, li e estou ciente dos termos do processo seletivo</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="onde-conheceu">Por onde conheceu a Share?</label>
                <select class="form-control @error('onde-conheceu') is-invalid @enderror" id="onde-conheceu" name="onde-conheceu" required>
                    <option value="" disabled selected></option>
                    <option value="Mídias Sociais (Facebook, Whatsapp, etc)">Mídias Sociais (Facebook, Whatsapp, etc)</option>
                    <option value="Recomendação">Recomendação</option>
                    <option value="Outras Mídias (Jornais, Revistas, Televisão)">Outras Mídias (Jornais, Revistas, Televisão)</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="form-group">
                <label for="esteve-ufscar">Você já esteve na UFSCar antes?</label>
                <select class="form-control @error('esteve-ufscar') is-invalid @enderror" id="esteve-ufscar" name="esteve-ufscar" required>
                    <option value="" disabled selected></option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="local-aulas">Você está ciente de que as aulas presenciais da Share acontecem na UFSCar Sorocaba, próximo à Salto de Pirapora?</label>
                <select class="form-control @error('local-aulas') is-invalid @enderror" id="local-aulas" name="local-aulas" required>
                    <option value="" disabled selected></option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="disponibilidade">Como você descreveria a sua disponibilidade de tempo atualmente?</label>
                <input type="text" class="form-control @error('disponibilidade') is-invalid @enderror" id="disponibilidade" name="disponibilidade">
            </div>
            <div class="form-group">
                <label for="objetivo">Seu principal objetivo com o curso é...</label>
                <select class="form-control @error('objetivo') is-invalid @enderror" id="objetivo" name="objetivo" required>
                    <option value="" disabled selected></option>
                    <option value="Aprender algo novo">Aprender algo novo</option>
                    <option value="Ter um hobby">Ter um hobby</option>
                    <option value="Atualizar-me para o mercado de trabalho">Atualizar-me para o mercado de trabalho</option>
                    <option value="Conhecer pessoas novas">Conhecer pessoas novas</option>
                    <option value="Por curiosidade">Por curiosidade</option>
                    <option value="Preparar-me para provas (vestibulares,  provas da faculdade)">Preparar-me para provas (vestibulares, provas da faculdade)</option>
                    <option value="Preparar-me para um intercâmbio">Preparar-me para um intercâmbio</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cursou-share">Voce já inscreveu-se em algum curso da Share?</label>
                <select class="form-control @error('cursou-share') is-invalid @enderror" id="cursou-share" name="cursou-share" required>
                    <option value="" disabled selected></option>
                    <option value="Sim e fui chamado">Sim e fui chamado</option>
                    <option value="Mais de uma vez mas nunca fui chamado.">Mais de uma vez mas nunca fui chamado.</option>
                    <option value="Uma vez mas não fui chamado">Uma vez mas não fui chamado</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="desistencia">Você está ciente de que desistir do curso, sem explicação plausível, impossibilitará o candidato de se inscrever para qualquer outro curso da Share, além de prejudicar sua turma?</label>
                <select class="form-control @error('desistencia') is-invalid @enderror" id="desistencia" name="desistencia" required>
                    <option value="" disabled selected></option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
