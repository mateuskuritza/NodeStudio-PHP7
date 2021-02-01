<?php
// Arrays númericos
/*$carro1 = "BMW";
$carro2 = "Veloster";
$carro3 = "Hilux";
*/
$carros = array("BMW","Veloster","Hilux");
// para exibir um array a função é especifica! não é o echo, ou echo dizendo o índice

echo "<br>".$carros[1];

// Se quiser alterar o valor do índice:
/*
array(1=>"BMW",2>="Veloster"..)
*/

// Para inserir mais um valor na ultima posição:
$carros[]="Amarok";
// Para especificar
$carros[7]="Honda";
print_r($carros);

$clientes = ["Rodrigo","Felipe","Bia"];
$clientes[3]="João";
print_r ($clientes);

// Count (mostra a quantidade de valores no array)
echo count($carros);

// ou $totalClientes = count($clientes); echo $totalClientes;
echo "<hr>";

// Foreach, faz a função para cada valor do array
foreach($carros as $valor){
	echo $valor."<br>";
}

// Arrays associativos! Quando os indices ou chaves são strings
echo "<hr>";
$pessoa = array("Nome"=>"Rodrigo","Idade"=>23,"Altura"=>1.75);
echo $pessoa["Nome"];
$pessoa["Cidade"] = "Itabuna";
print_r ($pessoa);
echo "<br>";

foreach($pessoa as $indice => $valor){
	echo $indice.": ".$valor."<br>";
}

// Array multidimensional ( array q contem array )

echo "<hr>";
$times = array("Cariocas"=> array("vasco","flamengo","botafogo"),"Paulistas"=> array("santos","sao paulo","palmeiras"),
"Baianos"=> array("bahia","vitoria","itabuna"));

echo $times["Paulistas"][1]."<br>";

foreach ($times["Cariocas"] as $indice=>$valor){
	echo $indice.":".$valor."<br>";
}


// funções arrays https://www.php.net/manual/pt_BR/ref.array.php
