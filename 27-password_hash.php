<?php

$senha = "123456";

$options = [
		'cost' => 10
];
// o padrão é 10, quanto maior mais seguro mas ocupa mais do hardware
$senhasegura = password_hash($senha, PASSWORD_DEFAULT, $options);
// para cadastrar no banco de dados colocar um espaço de 255 e não de 60

echo $senhasegura."<br>";

$senha_db = '$2y$10$5Yy5PeG7laSFL3NWJ9wbg.5ddWMJHxWIAeF2mohHwDq5Dx1xy7qo2';

if(password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

