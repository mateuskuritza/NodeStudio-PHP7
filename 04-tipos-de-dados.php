<?php
/*********** Escalares ********/

//string
$nome="Olá mundo 123 !#$%";
var_dump($nome);
// para avaliar o tipo de variavel
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr";

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
	echo "É int";
else:
	echo "Não é int";
endif;
echo "<hr";

//float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
	echo "É float";
else:
	echo "Não é float";
endif;
echo "<hr>";

//boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
	echo "É boolean";
else:
	echo "Não é boolean";
endif;
echo "<hr>";


/********Compostos***********/
// dado/variavel q armazena vários valores

//array
$carros=array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}
$cliente = new Cliente();
$cliente->atribuirNome("Mateus");
var_dump($cliente);
if(is_object($cliente)):
	echo "É objeto";
else:
	echo "Não é objeto";
endif;
echo "<hr>";


/***********ESPECIAIS****************/
// NULL
$cidade=NULL;
var_dump($cidade);

// Resource (dados externos)

