<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8");
// mesma codificação do html charset
if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;
