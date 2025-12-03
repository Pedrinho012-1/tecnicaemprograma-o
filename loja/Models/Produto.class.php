<?php
class Produto
{
    public function __construct(
        private int $id_produto = 0,
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $valor = 0.00,
        private string $imagem = "",
        private string $situacao = "",
        private int $categoria_id = 0
    ){}


    // ========== GETs ==========
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }


    // ========== SETs ==========
    public function setNome($nomeProduto)
    {
        $this->nome = $nomeProduto;
    }

    public function setDescricao($descricaoProduto)
    {
        $this->descricao = $descricaoProduto;
    }

    public function setEstoque($estoqueProduto)
    {
        $this->estoque = $estoqueProduto;
    }

    public function setValor($valorProduto)
    {
        $this->valor = $valorProduto;
    }

    public function setImagem($imagemProduto)
    {
        $this->imagem = $imagemProduto;
    }

    public function setSituacao($situacaoProduto)
    {
        $this->situacao = $situacaoProduto;
    }
}
?>