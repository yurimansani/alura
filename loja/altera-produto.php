<?php
require_once("cabecalho.php");
require_once("banco-produto.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

$categoria_id = $_POST['categoria_id'];

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $usado, $categoria_id)) { ?>
	<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>