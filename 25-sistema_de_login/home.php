<?php

require_once 'db_connect.php';

session_start();

//verificação para q ninguém acesse a pagina restrita sem logar
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
// a variavel dados agora contem o array do db, com id nome login e senha
// é interessante fechar a consulta ao banco de dados após pegar os dados
mysqli_close($connect);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Restrita</title>
	<meta charset="utf-8">
</head>
<body>

	<h1> Login efetuado com sucesso! </h1>
	<h1> Olá <?php echo $dados['nome']; ?></h1>
	<a href="logout.php">Sair</a>

</body>
</html>