<?php
//Header
include_once 'header.php';


?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>
			<button type="submit" class="btn" name="btn-cadastrar">Cadastrar</button>
			<?php // <a é para criar um link que vai para href e class é para "estilizar" ele (pelo materialize) ?>
			<a href="index.php" class="btn green">Lista de Clientes</a>
		</form>
	</div>
</div>


<?php
//Footer
include_once 'footer.php';
?>