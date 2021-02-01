<?php

$numero = 13;

if ($numero==10):
	echo "É igual a 10";
elseif($numero >= 15):
	echo "É maior ou igual a 15";
else:
	echo "É diferente de 10 e menor ou igual a 15";
endif;

echo "<hr>";

$media = 7;
echo ($media >= 7) ? "Aprovado!" : "Reprovado";
// é um if com else em uma linha