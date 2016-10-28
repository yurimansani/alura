<?php
require_once("conecta.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");



function listaProdutos($conexao) {

	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome 
		from produtos as p join categorias as c on c.id=p.categoria_id");

	while($produto_array = mysqli_fetch_assoc($resultado)) {
		
		$categoria = new Categoria();
		$categoria->setNomeCategoria( $produto_array['categoria_nome']);

		
		$id = $produto_array['id'];
		$nome = $produto_array['nome'];
		$descricao = $produto_array['descricao'];
		$preco = $produto_array['preco'];
		$usado = $produto_array['usado'];

		$produto = new Produto($nome, $preco, $descricao, $categoria, $preco, $usado);
		$produto->setId($id);
		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conexao, Produto $produto) {
	$categoria = $produto->getCategoria();


	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) 
		values (
		'{$produto->getNome()}',
		{$produto->getPreco()},
		'{$produto->getDescricao()}',
		{$categoria->getIdCategoria()},
		{$produto->getUsado()})";

	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, Produto $produto) {
	$categoria = $produto->getCategoria(); 
	$query = "update produtos set nome = 
	'{$produto->getNome()}',
	preco = {$produto->getPreco()},
	descricao = '{$produto->getDescricao()}', 
	categoria_id= {$categoria->getIdCategoria()},
	usado = {$produto->getUsado()}
	where id = '{$produto->getId()}'";
 	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$produto_array = mysqli_fetch_assoc($resultado);

	$categoria = new Categoria();
	$categoria->setIdCategoria ( $produto_array['categoria_id']);


	$id = $produto_array['id'];
	$nome = $produto_array['nome'];
	$descricao = $produto_array['descricao'];
	$categoria = $categoria;
	$preco = $produto_array['preco'];
	$usado = $produto_array['usado'];

	$produto = new Produto($nome, $preco, $descricao, $categoria, $preco, $usado);
	$produto->setId($id);

	return $produto;
}

function removeProduto($conexao, $id) {

	$query = "delete from produtos where id = {$id}";

	return mysqli_query($conexao, $query);
}