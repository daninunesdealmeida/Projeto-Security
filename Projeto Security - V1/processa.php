<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, cpf, created) VALUES ('$nome', '$email', '$cpf', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<h5 style='color:green;' class='container'>As informações foram enviadas com sucesso.</h4>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<h5 style='color:red;'>As informações não foram enviadas com sucesso.</h5>";
	header("Location: index.php");
}
?>


