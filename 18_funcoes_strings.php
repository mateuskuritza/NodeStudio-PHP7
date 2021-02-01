<?php

/*
strtoupper    deixa tudo maiusculo
strtolower    deixa tudo minusculo
substr        retorna o string a partir de um numero de caracteres (e ainda pode selecionar quantos quer, conta espaço)
str.pad       adiciona determinados caracteres até totalizar um numero deles
str_repeat     repete o string um numero de vezes
strlen         retorna o comprimento do string
str_replace    substitui uma palavra especifica por outra
strpos         retorna a posição do ultimo caractere de determinada palavra
*/

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 3);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_BOTH);
echo $novoObjeto;
// STR_PAD_LEFT STR_PAD_RIGHT (padrao) 

echo "<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string;

echo "<hr>";
echo strlen($mensagem);

echo "<hr>";
$texto = "A seleção Argentina será campeã da copa do mundo";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo strpos($texto, "copa");
