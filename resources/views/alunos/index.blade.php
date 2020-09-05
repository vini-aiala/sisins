<!DOCTYPE html>
<html>
	<head>
		<title>Inscrição Share</title>
		<link rel="icon" href="../img/globo.png">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link rel="stylesheet" type="text/css" href="../css/inscricoes.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	</head>

	<body>

		<main>

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
			    	<a href="{{ route('alunos-edicao') }}" class="center atualizar waves-effect waves-light btn">Atualizar perfil</a>

					<h5>Seus cursos:</h5>
					<ul class="collection with-header">
				        <li class="collection-item">
							<span class="title"><b>Violão</b></span>
							<a href="{{ route('alunos-lista') }}" class="secondary-content"><i class="material-icons">delete</i></a>
							<p>Básico A - Quinta-feira, das 12:00 ás 13:00</p>
						</li>
				        <li class="collection-item"><div><i>Curso não selecionado</i><a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
				    </ul>
			    </div>
			    <div class="col s12 m0 l3"></div>
			  </div>

		</main>

		<!--JavaScript para animação e validação de email e senha-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>



	</body>
</html>
