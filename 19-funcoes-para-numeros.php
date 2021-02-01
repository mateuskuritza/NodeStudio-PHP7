<?php

$db = 1234.56;
$preco = number_format($db, 2, ",",".");
echo "O valor é R$ $preco";
// (nome, casas decimais, separador decimal, separador milhar)

echo "<hr>";

echo round(3.4);
// arredonda

echo "<hr>";

echo ceil(3.4);
// arredonda sempre pra cima

echo "<hr>";

echo floor(3.9);
// arredonda sempre pra baixo

echo "<hr>";

echo rand(1,20);
// valores aleatorios de 1 a 20

echo "<hr>";

$pessoas = array("Mateus","Joao","Afonso");

foreach ($pessoas as $value):
	echo "O numero sorteado para o $value foi: ".rand(1,15)."<br>";
endforeach;