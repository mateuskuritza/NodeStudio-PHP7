<?php
// ESCOPO GLOBAL
$nome = "Mateus Kuritza";

// A função usa a variavel no local, a não ser q diga o contrario
function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";
/////////////////

function exibeCidade(){
	global $cidade;
	$cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

///////////////

$a = 1;
$b = 3;
$c = 7;
// quando cria assim, é no escopo global

function soma() {
	echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}

soma();
