<?php
//Header
include_once 'header.php';


?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cadastro </h3>
		<form action="cadastrar.php" method="POST">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="login" id="login">
				<label for="login">Login</label>
			</div>
			<div class="input-field col s12">
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>
			<button type="submit" class="btn" name="btn-cadastrar">Cadastrar</button>
			<?php // <a é para criar um link que vai para href e class é para "estilizar" ele (pelo materialize) ?>
			<a href="index.php" class="btn green">Pagina de Login</a>
		</form>
	</div>
</div>


<?php
//Footer
include_once 'footer.php';
?>