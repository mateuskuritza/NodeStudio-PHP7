<?php

// Confere se existe o usuario > usuario bate com a senha? > inicia sessão

//Conexão (pega aquele arquivo e "joga" aqui)
require_once 'db_connect.php';

//Sessão
session_start();

if(isset($_SESSION['mensagem'])): ?>

<script> 
	window.onload = function(){
		M.toast({html: "<?php echo $_SESSION['mensagem']; ?>"});
	};
</script>

<?php
endif;

session_unset();
// para limpar a sessão e apagar a mensagem!


// Botão enviar
if (isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($connect,$_POST['login']); //filtrar (conexão do servidor em db_connect e a variavel)
	$senha = mysqli_escape_string($connect,$_POST['senha']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo login e senha precisam ser preenchidos </li>";
	else:
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		// consultar se existe alguma conexão, ou seja, se existe algum login igual, na coluna usuarios do db
		if(mysqli_num_rows($resultado) > 0):
			//precisa criptografar a senha para que ela "bata" com a senha do db que está com a mesma criptografia
			$senha = md5($senha);
			// existe algum registro, logo, consultar em toda (*) a tabela usuarios se existe algum casamento entre o login e senha fornecidos
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);
			

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				// avisar a verificação q o usuario está logado
				$_SESSION['id_usuario'] = $dados['id'];
				// para logar no sistema no id do usuario do banco de dados
				header('Location: home.php');
				// header é a função que redireciona para outra pagina
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente! </li>";
		endif;
	endif;

endif;

?>


<?php
//Header
include_once 'header.php';


?>

	<h1 align="center"> Login </h1>

<?php
if(!empty($erros)):
	?>
	<script> 
		window.onload = function(){
		M.toast({html: "<?php echo $erros[0]; ?>"});
		};
	</script>
	<?php
endif;
?>
<hr>

<div class="row">
<div class="col s12 m6 push-m3">



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	<div class="input-field col s12 card-panel indigo darken-4">
		<input type="text" name="login" id="login" class="blue-text">
		<label for="login" class="blue-text">Login</label>
	</div>

	<div class="input-field col s12 card-panel indigo darken-4">
		<input type="password" name="senha" id="senha" class="green-text">
		<label for="senha" class="green-text">Senha</label>
	</div>

<button type="submit" name="btn-entrar" class="btn blue"> Entrar </button>

<a href="cadastro.php" class="btn">Cadastrar</a>

</form>



</div>
</div>

<style>
	
   body{
   	background-image: url("https://images2.alphacoders.com/542/thumb-1920-542730.png");
   	background-size: cover;
   }

   h1 {
   	color: gold;
   }

</style>
<?php
//Footer
include_once 'footer.php';
?>