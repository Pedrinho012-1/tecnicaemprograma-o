<?php

class Fornecedor
{
    public function __construct(
        private string $cnpj = "",
        private string $razao_social = "",
        private Produto $produto
    ){}

    //========== Métodos GET ==========

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    public function getProduto()
    {
        return $this->produto;
    }


    //========== Métodos SET ==========

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }
}

?>