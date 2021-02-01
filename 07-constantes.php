<?php
// Constantes, identificador para valor único (não pode alterar)

define ("NOME","José Carlos");
echo NOME;

// Por convenção, os valores constantes são sempre em letra maiuscula

define("IDADE",24);
define("ALTURA",1.89);
define("CASADO",true);

var_dump(CASADO);

echo 'Meu nome é '.NOME.'e minha idade é '.IDADE.' e minha altura é '.ALTURA.' eu sou casado? '.CASADO;

define ("TIMES",['vasco','flamengo','santos']);
echo "<hr>";
echo TIMES[1];
var_dump(TIMES);

// As constates são automaticamente GLOBAIS
function exibeNome(){
	echo NOME;
}

exibeNome();


