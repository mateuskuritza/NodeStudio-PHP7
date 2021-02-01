<html>
<body>

<?php
/* Validações
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
filters validade php manual
*/
?>

<?php

if(isset($_POST['enviar-formulario'])):
	$erros = array();

	if(!$idade=filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um número inteiro";
	endif;

	if(!$email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Confira seu email";
	endif;

	if(!$peso=filter_input(INPUT_POST,'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Confira seu peso";
	endif;

	if(!$ip=filter_input(INPUT_POST,'ip', FILTER_VALIDATE_IP)):
		$erros[] = "Confira seu IP";
	endif;

	if(!$url=filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL)):
		$erros[] = "Confira sua URL";
	endif;

	if(!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;

endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Idade: <input type="text" name="idade"><br>
	Email: <input type="text" name="email"><br>
	Peso: <input type="text" name="peso"><br>
	IP: <input type="text" name="ip"><br>
	URL: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button> 
</form>
</body>
</html>



