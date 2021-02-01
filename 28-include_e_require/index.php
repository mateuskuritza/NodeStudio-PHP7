<?php
// include e require servem para adicionar um arquivo php em outro
// require se não consegue ele da erro e para a execução do script
// include retorna um aviso mas continua o script
include_once 'header.php';
// o once serve para ele verificar se o arquivo já foi incluso, se já tiver sido ele não inclui

?>
<?php echo "Olá Pessoal"; ?>

<?php
require_once 'footer.php';
?>