<?php
    session_start();

 ?>

<?php require_once 'template/cabecalho.php'; ?>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading"> Security </h1>
		<p> <img src="imagens/logo.png" align = "center" style="width: 100px;">  </p>
  </div>
</section>

<div id="degrade1div" class="container"><br>
	<h2>Preencha com seus dados</h2>
	<hr>
	<form method="POST" action="processa.php">
		<div class="form-group">
			<label> Nome: </label>
			<input type="text" class="form-control" name="nome" placeholder="Digite o nome" require><br>
		</div>
		<div class="form-group">
			<label> E-mail: </label>
			<input type="email" class="form-control" name="email" placeholder="Digite o e-mail" require><br>
		</div>
		<div class="form-group">
			<label> CPF: </label>
			<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" onkeypress="$(this).mask('000.000.000-00');" require><br>
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
		<h5>Após enviar os dados, para continuar <a style="color: darkred;" id="semdecoration"href="https://www.upf.br/">CLIQUE AQUI.</a></h5>
	</div>
</body>
<?php require_once 'template/rodape.php'; ?>
</html>
