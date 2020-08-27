<!DOCTYPE html>
<html>
	<head>
		<title>Inscrição Share</title>
		<link rel="icon" href="../img/globo.png">
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link rel="stylesheet" type="text/css" href="../css/candidato.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>


		<!--cabeçalho-->
		<header>
				<nav class="nav-wrapper transparent">
				  <div class="container">
					<a href="cursos.html" class="brand-logo"><img class="imagem_logo" alt="Logo da Share" src="../img/globo.png"></a>
					<a href="" class="sidenav-trigger" data-target = "mobile-menu">
					  <i class="material-icons">menu</i>
					</a>
		
					<!--menu desktop-->
					<ul class="right hide-on-med-and-down">
					  <li><a class="link_menu" href="cursos.html">Cursos</a></li>
					  <li><a class="link_menu" href="#">Inscrições</a></li>
					  <li><a class="link_menu" href="#">Logout</a></li>
					</ul>
					<!--menu mobile-->
					<ul class="sidenav lighten-2" id="mobile-menu">
					  <li><a href="cursos.html">Cursos</a></li>
					  <li><a href="#">Inscrições</a></li>
					  <li><a href="#">Logout</a></li>
					</ul>
				  </div>
				</nav>
			  </header>

			  <main>
					<h3>João Victor Montefusco</h3>
	   
					<h4>Aluno</h4>
					<article>
					   <p><b>Categoria:</b><br> Pessoas com vínculo com a UFSCar.</p>
					   <p><b>Vínculo:</b><br> Aluno da Graduação</p>
					   <p><b>Data de nascimento:</b><br> 20/10/1997</p>
					   <p><b>Telefone:</b><br> (15)996073387</p>
					   <p><b>Email:</b><br> joaovmontefusco@gmail.com</p>
					   
				   </article>
	   
					<h4>Inscrição</h4>
	   
					<article>
					   <p><b>Esteve antes na UFSCar:</b><br> Sim</p>
					   <p><b>Ciente de que as aulas acontecem na UFSCar Sorocaba:</b><br> Sim</p>
					   <p><b>Disponibilidade de tempo:</b><br> Tranquilo</p>
					   <p><b>Objetivo com o curso:</b><br> Aprender algo novo</p>
					   <p><b>Inscrição e outros cursos da Share:</b><br> Sim, e fui chamado.</p>
					   <p><b>Ciência das consequências da desistências do curso:</b><br> Sim</p>
					   <p><b>Texte de por quê gostaria de fazer um curso na Share:</b><br>
						   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores quibusdam soluta nam veniam qui voluptate eveniet inventore eos sint magnam non nemo, exercitationem, impedit magni tempora eum est dolorem enim.
					   </p>
	   
					   <p><b>Leitura do edital:</b><br> Sim</p>
					   <p><b>Por onde conheceu a Share:</b><br> Recomendação</p>
					</article>
	   
	   
					<form class="botoes">
						   <a class="botao waves-effect waves-light green btn-large">Aprovar</a>
						   <a class="botao waves-effect waves-light yellow btn-large">Lista de espera</a>
						   <a class="botao waves-effect waves-light blue btn-large">Desistência</a>
						   <a class="botao waves-effect waves-light red btn-large">Reprovar</a>
					   
					   <label class="check">
						   <input type="checkbox" />
						   <span>Continuar avaliando</span>
					   </label>
				   </form>
	   
	   
			   </main>

		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		<!--JS para barra de navegação no mobile-->
		<script>
		  $(document).ready(function(){
			$('.sidenav').sidenav();
		  });
		</script>

	</body>
</html>