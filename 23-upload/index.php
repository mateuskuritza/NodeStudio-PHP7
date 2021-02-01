<html>
<body>

<?php

if(isset($_POST['enviar-formulario'])):
	$formatosPermitidos = array("png","jpeg","jpg","gif");
	//var_dump($_FILES);
	$formatosPermitidosString = implode(", ", $formatosPermitidos);
	$quantidadeArquivos = count($_FILES['arquivo']['name']);
	$contador=0;

	while ($contador<$quantidadeArquivos):

	$extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);
	$nomeantigo = $_FILES['arquivo']['name'][$contador];
	if(in_array($extensao, $formatosPermitidos)):
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];
		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):
			echo "Upload feito com sucesso para $pasta$novoNome do arquivo $nomeantigo <br>";
		else:
			echo "Erro, não foi possível fazer o upload de $temporario <br>";
		endif;
	else:

		echo "Formato inválido $nomeantigo, o formato deve ser algum entre: $formatosPermitidosString.<br>";
	endif;

	$contador++;	
	endwhile;

endif;

?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">

</form>
</body>
</html>