<?php
require_once "Models/Conexao.class.php";
require_once "Models/ProdutoDAO.class.php";
require_once "Models/Produto.class.php";

class ProdutoController
{
    public function listar()
    {
        $produtoDAO = new ProdutoDAO();
        $retorno = $produtoDAO->buscar_todos();

        require_once "Views/listar_produtos.php";
    }
}
?>