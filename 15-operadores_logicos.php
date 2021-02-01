<?php

/*
 && - and
 || - or (apresenta verdadeiro se ao menos um for verdadeiro)
 ou exlusivo - xor (apresenta verdadeiro se forem diferentes)
 negação - ! colocar antes do parenteses
*/


 $idade = 25;
 $nome = "Mateus";

 if(($idade==25) and !($nome == "Rodrigo")):
 	echo "É verdadeiro";
else:
	echo "É falso";
endif;

