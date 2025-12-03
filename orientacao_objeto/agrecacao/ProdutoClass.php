<?php
class Produto {
    public function __construct (
        private string $nome = "",
        private float $preco = 0.00,
        private array $categoria = array()
    ){}

    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }


    //========== Métodos SET ==========

    public function setNome($nomeProduto)
    {
        $this->nome = $nomeProduto;
    }

    public function setPreco($precoProduto)
    {
        $this->preco = $precoProduto;
    }

    public function setCategoria(Categoria $categoriaProduto)
    {
        $this->categoria[] = $categoriaProduto;    
    }
}
?>