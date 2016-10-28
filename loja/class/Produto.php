<?php

class Produto {

	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;

	function __construct($nome, $preco, $descricao, Categoria $categoria,  $usado)
	{
		$this->noem = $foo;
		$this->nome = $nome;
		$this->preco = $preco;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
		$this->usado = $usado;
	}


	#Set
	public function setId($id)
	{
		$this->id = $id;
	}
	

	#gets
	public function getId()
	{
		return $this->id;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function getPreco()
	{
		return $this->preco;
	}
	public function getDescricao()
	{
		return $this->descricao;
	}
	public function getCategoria()
	{
		return $this->categoria;
	}
	public function getUsado()
	{
		return $this->usado;
	}


	public function precoComDesconto ($desconto = 0.1)
	{
		$preco = $this->preco;
		if ($desconto > 0 && $desconto <= 0.5) {
			$preco = $preco - $preco * $desconto;
			return $preco ;	
		}

		$preco = $preco - $preco * 0.1;
		return $preco ;	
		
	}



}

?>