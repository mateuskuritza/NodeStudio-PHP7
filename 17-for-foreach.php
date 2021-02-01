<?php

for ($contador = 0; $contador <= 10; $contador++):

	echo "13 x $contador = ".($contador*13)."<br>";

endfor;

echo "<hr>";

// foreach é usado para percorrer arrays

$cores = array("verde","vermelho","azul");

// ele transcorre o array $cores valor por valor
foreach($cores as $valor):
	echo $valor."<br>";
endforeach;

echo "<br>";

foreach($cores as $indice => $valor):
	echo $indice."-".$valor."<br>";
endforeach;