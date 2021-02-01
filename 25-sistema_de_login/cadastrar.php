<?php
// Conexão
require 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect,$_POST['nome']);
	$login = mysqli_escape_string($connect,$_POST['login']);
	$senha = mysqli_escape_string($connect,$_POST['senha']);
	//$senha = md5($senha);
	
	$sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";
		header('Location: index.php');
	endif;


endif;