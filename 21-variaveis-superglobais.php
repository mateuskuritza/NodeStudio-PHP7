<?php

// Variaveis sempre acessiveis pelo php

/*
$GLOBALS
$_SERVER   cabeçalhos, caminhos, scripts
$_REQUEST  
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

$x = 10;
$y = 15;

function soma(){
	echo $GLOBALS['x']+$GLOBALS['y'];
}

soma();

//com GLOBALS consegue acessar qualquer variavel 

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
// outros indices pesquisar por $_SERVER manual php

echo "<hr>";

