<html>
<body>

<?php
/* Sanitização
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS   (ele aceita tudo os chars)
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
filters sanitize manual php
	$variavel = filter_input(INPUT_POST, 'nome',qualquer filtro ou sanitize)
*/
?>

<?php

if(isset($_POST['enviar-formulario'])):
	$erros = array();

	//Sanitize
	$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	// se não filtar, é possível adicionar códigos na pagina pelo formulário
	$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
	// limpa e deixa apenas os numeros inteiros 
	$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
	
	$url = filter_input(INPUT_POST, 'url',FILTER_SANITIZE_URL);

	// É BOM FILTAR E VALIDAR !

	if(!filter_var($idade,FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro <br>";
	endif;

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email inválido! <br>";
	endif;

	if(!filter_var($idade,FILTER_VALIDATE_URL)):
		$erros[] = "URL inválida! <br>";
	endif;	

	if(!empty($erros)):
		foreach ($erros as $erro) {
			echo $erro;
		}
	else:
		echo "Parabéns seus dados estão corretos! <br>";
	endif;

endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Nome: <input type="text" name="nome"><br>
	Idade: <input type="text" name="idade"><br>
	Email: <input type="text" name="email"><br>
	URL: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button> 
</form>
</body>
</html>



