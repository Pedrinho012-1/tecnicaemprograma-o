<?php

class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0.00,
        private array $fornecedor = array()
    ){}

    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }


    //========== Métodos SET ==========

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedor[] = $fornecedor;
    }
}

?>