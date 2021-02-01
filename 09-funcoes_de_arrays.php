<?php
// funções arrays https://www.php.net/manual/pt_BR/ref.array.php

/* $nomes = array("Primo"=>"Rodrigo","Vizinho"=>"Felipe","Mãe"=>"Maria","Pai"=>"Mateus");

if(is_array($nomes)):
	echo "é um array";
else:
	echo "não é um array";
endif;

echo "<br>";

echo in_array("Rodrigo",$nomes);

$keys = array_keys($nomes); // cria um array com os indices
print_r($keys);

$values = array_values($nomes); // cria um array com os valores
print_r($values);


echo "<br>";
$carros = array("Camaro","Uno","Gol");
$motos = array("Pop100","50cc","cb1000");

$veiculos = array_merge($carros,$motos); // junta os valores de dois ou mais arrays
print_r($veiculos);

print_r($carros);
echo "<br>";
array_pop($carros); // apaga o ultimo valor
// echo array_pop($carros); mostra o ultimo valor
// array_shift($carros); é o mesmo mas para o primeiro valor
print_r($carros);
echo "<br>";

*/
$frutas = ["uva","laranja","maça"];
print_r($frutas);
array_unshift($frutas,"manga","acerola","mamao");
// adiciona novos valores no inicio do array, array_push para adicionar no final do array
print_r($frutas);
echo "<br>";

$keys=array("Campeão","Vice","Terceiro");
$values=array("Vasco","Flamengo","Palmeiras");
$times = array_combine($keys,$values); // mescla o indice e valor de dois arrays
print_r($times);
echo "<br>";

$soma = array(5,6,10,8,"10");
echo array_sum($soma); //soma os valores do array
echo "<br>";

$data = "30/02/2018";
$novaData = explode('/', $data); // transforma sting em array
print_r($novaData);
echo "<br>";

$frase = "meu nome não é johnny";
$array = explode(" ",$frase);
print_r($array);


// implode transforma array em string

$nomes=array("Rodrigo","Carlos","Neusa","Talita");
echo implode(",", $nomes);

echo "<br>";

$letras = "E I K L P P Q E R S A Z X V B L K M E D";
$array_letras= explode(" ", $letras);
array_multisort($array_letras);
echo implode(" ", $array_letras);


