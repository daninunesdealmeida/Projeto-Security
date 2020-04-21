<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Cadastrar</title>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style>
		body {
			font-family: Georgia, 'Times New Roman', Times, serif;

		}

		#degrade1div {
			background-image: linear-gradient(to top, #87CEFF, silver)
		}

		#semdecoration {
			text-decoration: none;
		}

		#footer {
			background-color: #e9ecef;
			margin-left: 2%;
			margin-right: 2%;
			position: relative;
		}


		nav {
			margin-left: 2%;
			margin-right: 2%;
			text-align: center;
		}
	</style>
</head>


<nav class="navbar navbar-dark bg-dark">
	<span style="font-family: sans-serif;" class="navbar-text">
		@ SECURITY
	</span>
</nav>

<br>

<div id="degrade1div" class="container"><br>
	<h2>Preencha com seus dados</h2>
	<hr>
	<form method="POST" action="processa.php">
		<div class="form-group">
			<label> Nome: </label>
			<input type="text" class="form-control" name="nome" placeholder="Digite o nome" require><br><br>
		</div>
		<div class="form-group">
			<label> E-mail: </label>
			<input type="email" class="form-control" name="email" placeholder="Digite o e-mail" require><br><br>
		</div>
		<div class="form-group">
			<label> CPF: </label>
			<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" onkeypress="$(this).mask('000.000.000-00');" require><br><br>
		</div>
		<input type="submit" class="btn btn-primary" value="Enviar">
	</form>
	<br>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<hr>
	<div>
		<h5>Após enviar os dados, para continuar <a style="color: darkred;" id="semdecoration"href="">CLIQUE AQUI.</a></h5>
	</div>

</body>
<footer style="text-align: center;" id="footer" class="footer mt-auto py-3">
	<div class="container">
		<span class="text-muted">@ Security S.A - Construído por: Daniel de Almeida
		</span>
	</div>
</footer>

</html>