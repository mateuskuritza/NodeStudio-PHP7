<?php

function exibirNome($nome){
	echo "Meu nome é $nome";
}

exibirNome("Adriele Santos");

echo "<hr>";

function calcularMedia($nome,$n1,$n2,$n3,$n4){
	$media = ($n1 + $n2 + $n3 + $n4)/4;
	if($media>=7):
		echo "$nome foi aprovado! Com a média $media.<br>";
	else:
		echo "$nome foi reprovado, com a média $media.<br>";
	endif;
}

calcularMedia("João",5,7,9,1);
calcularMedia("Rodrigo",3.5,10,5,10);
