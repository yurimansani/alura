<?php

class Produto {

	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;



	#Set
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function setPreco($preco)
	{
		$this->preco = $preco;
	}
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}
	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;
	}
	public function setUsado($usado)
	{
		$this->usado = $usado;
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
		$preco = $preco - $preco * $desconto;
		return $preco ;
	}



}

?>