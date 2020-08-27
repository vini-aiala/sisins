<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro Share</title>
		<meta charset="utf-8">
		<link rel="icon" href="../img/globo.png">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
	</head>

	<body>
		<img alt="Logo da Share" class="logo" src="../img/share-logo.png">
		<h3>Cadastro</h3>


		  <div class="row">
		    <form class="col s12">

				<div class="row">
					<div class="col s12 m4 l3"></div>
				  <div class="input-field col s12 m4 l6">
					  <container><label>Responda em qual categoria se encaixa</label></container>
					<select>
						<option value="" disabled selected></option>
						<option value="Pessoas com vínculo com a UFSCar.">Pessoas com vínculo com a UFSCar.</option>
						<option value="Alunos do terceiro ano do ensino médio (tendo no mínimo 16 anos)">Alunos do terceiro ano do ensino médio (tendo no mínimo 16 anos)</option>
						<option value="Pessoas que não possuem vínculo com a UFSCar">Pessoas que não possuem vínculo com a UFSCar</option>
					  </select>
					  
				  </div>
				  <div class="col s12 m4 l3"></div>
				</div>

		      <div class="row">
		      	<div class="col s12 m4 l3"></div>
		        <div class="input-field col s12 m4 l6">
					<container><label for="name">Nome completo</label></container>
		          <input id="name" type="text" class="validate">
		          
		        </div>
		        <div class="col s12 m4 l3"></div>
			  </div>

			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m2 l3">
				  <container><label for="text">Data de nascimento (idade mínima: 16 anos)</label></container>
				  <input type="text" class="text" id="text">
				
			  </div>
			  <div class="input-field col s12 m2 l3">
				  <container><label for="icon_telephone">DDD + telefone</label></container>
				  <input id="icon_telephone" type="tel" class="validate">
				
			  </div>
			  <div class="col s12 m2 l3"></div>
			</div>

			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label for="email">Email</label></container>
					<input id="email" type="email" class="validate">
				
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>

			<div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label for="password">Senha</label></container>
					<input id="password" type="password" class="validate">
				
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>
			  

			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label>Você é estudante? E/ou trabalha?</label></container>
				  <select>
					  <option value="" disabled selected></option>
					  <option value="Trabalho e não estudo">Trabalho e não estudo</option>
					  <option value="Não trabalho e estudo">Não trabalho e estudo</option>
					  <option value="Não estudo e não trabalho">Não estudo e não trabalho</option>
					  <option value="Estudo e trabalho">Estudo e trabalho</option>
					  </select>
					  
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>


		      <div class="row">
		      	<div class="col s12 m4 l3"></div>
		        <div class="input-field col s12 m4 l6">
					<container><label>Qual o seu vínculo com a UFSCAR?</label></container>
		          <select>
				      <option value="" disabled selected></option>
				      <option value="Professor">Professor</option>
				      <option value="Técnico-Administrativo (TAs)">Técnico-Administrativo (TAs)</option>
				      <option value="Aluno da Graduação">Aluno da Graduação</option>
				      <option value="Aluno da Pós Graduação">Aluno da Pós Graduação</option>
					  <option value="Outro">Outro</option>
					  <option value="Outro">Nenhum</option>
				    </select>
				    
		        </div>
		        <div class="col s12 m4 l3"></div>
			  </div>
			  
			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label for="text">Escola em que estuda e cidade (Se for aluno do ensino médio)</label></container>
				<input id="text" type="text" class="text">
				
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>

			<div class="row">
				  <div class="col s12 m4 l3"></div>
				<div class="input-field col s12 m4 l6">
					<container><label>Você leu atentamente o edital?</label></container>
					<select>
						<option value="" disabled selected></option>
						<option value="Sim, e fui chamado">Sim, li e estou ciente dos termos do processo seletivo.</option>
						<option value="Não">Não</option>
					</select>				
				</div>
				<div class="col s12 m4 l3"></div>
			</div>

			<div class="row">
				  <div class="col s12 m4 l3"></div>
				<div class="input-field col s12 m4 l6">
					<container><label>Por onde conheceu a Share?</label></container>
						<select>
							<option value="" disabled selected></option>
							<option value="Mídias Sociais (Facebook, Whatsapp, etc)">Mídias Sociais (Facebook, Whatsapp, etc)</option>
							<option value="Recomendação">Recomendação</option>				     
							<option value="Outras Mídias (Jornais, Revistas, Televisão)">Outras Mídias (Jornais, Revistas, Televisão)</option>
							<option value="Outros">Outros</option>				     
						</select>
				
				</div>
				<div class="col s12 m4 l3"></div>
			</div>

			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label>Você já esteve na UFSCar antes?</label></container>
				<select>
					<option value="" disabled selected></option>
					<option value="Sim">Sim</option>
					<option value="Não">Não</option>				     
				  </select>
				  
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>

			<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
					  <container><label>Você está ciente de que as aulas da Share acontecem na UFSCar Sorocaba, próximo à Salto de Pirapora?</label></container>
				  <select>
					<option value="" disabled selected></option>
					<option value="Sim">Sim</option>
					<option value="Não">Não</option>				     
				  </select>
				  
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>


			<div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <container><label for="textarea1">Como voce descreveria a sua disponibilidade de tempo atualmente?</label></container>
				 <textarea id="textarea1" class="materialize-textarea"></textarea>
					
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>			  

			  <div class="row">
					<div class="col s12 m4 l3"></div>
				  <div class="input-field col s12 m4 l6">
					  <container><label>Seu principal objetivo com o curso é:</label></container>
				   <select>
					<option value="" disabled selected></option>
					<option value="Aprender algo novo">Aprender algo novo</option>
					<option value="Ter um hobby/me distrair">Ter um hobby/me distrair</option>
					<option value="Me atualizar para o mercado de trabalho">Me atualizar para o mercado de trabalho</option>
					<option value="Conhecer pessoas novas">Conhecer pessoas novas</option>
					<option value="Conhecer mais sobre a área/ sanar minha curiosidade">Conhecer mais sobre a área/ sanar minha curiosidade</option>
					<option value="Me preparar para provas (vestibulares,  provas da faculdade)">Me preparar para provas (vestibulares,  provas da faculdade)</option>
					<option value="Me preparar para um intercâmbio">Me preparar para um intercâmbio</option>
					<option value="Outro">Outro</option>
				  </select>
				  
				  </div>
				  <div class="col s12 m4 l3"></div>
			  </div>

			  <div class="row">
					<div class="col s12 m4 l3"></div>
				  <div class="input-field col s12 m4 l6">
					  <container><label>Voce já se inscreveu em algum curso da share?</label></container>
				   <select>
					<option value="" disabled selected></option>
					<option value="Sim, e fui chamado">Sim, e fui chamado</option>
					<option value="Não">Não</option>
					<option value="Uma vez, e não fui chamado">Uma vez, e não fui chamado</option>
					<option value="Mais de uma vez, e nunca fui chamado.">Mais de uma vez, e nunca fui chamado.</option>
				  </select>
				  
				  </div>
				  <div class="col s12 m4 l3"></div>
			  </div>


			  <div class="row">
					<div class="col s12 m4 l3"></div>
				  <div class="input-field col s12 m4 l6">
				  <container><label>Você está ciente de que desistir do curso, sem explicação plausível, impossibilitará o candidato de se inscrever para qualquer outro curso da Share, além de prejudicar sua turma?</label></container>
				   <select>
					<option value="" disabled selected></option>
					<option value="Sim">Sim</option>
					<option value="Não">Não</option>				     
				  </select>
				  
				  </div>
				  <div class="col s12 m4 l3"></div>
			  </div>

			  <div class="row">
				<div class="col s12 m4 l3"></div>
			  <div class="input-field col s12 m4 l6">
				  <h6>Para finalizar, pedimos para que você escreva entre 5 e 10 linhas por que gostaria de fazer um curso na Share. Lembre-se, esse é um dos critérios mais importantes para ser selecionado (exceto: curso português).</h6>
				 <textarea id="textarea1" class="materialize-textarea"></textarea>
					<label for="textarea1"></label>
			  </div>
			  <div class="col s12 m4 l3"></div>
			</div>

		    </form>
		  </div>

		<div class='row'>
        	<a href="login.html" class="entrar waves-effect waves-light btn">Cadastrar</a>
        </div>	



        <!--JS-->
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<script>
			$(document).ready(function(){
			    $('select').formSelect();
			});
		</script>
	


	</body>
</html>