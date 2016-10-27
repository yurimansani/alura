<?php 

class Categoria {
    public $id;
    public $nome;

    public function setIdCategoria($id)
    {
    	$this->id = $id;
    }

    public function setNomeCategoria($nome)
    {
    	$this->nome = $nome;
    }

    public function getIdCategoria()
    {
    	return $this->id;
	}

    public function getNomeCategoria()
    {
    	return $this->nome;
	}


}

?>