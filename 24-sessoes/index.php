<?php
// Sessoes servem para carregar informações em mais de uma página (login, carrinho de compras,etc);
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();

?>
