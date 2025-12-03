<?php
require_once "Models/Conexao.class.php";
require_once "Models/CategoriaDAO.class.php";
require_once "Models/Categoria.class.php";

class CategoriaController
{
    public function listar()
    {
        // Buscar os dados no banco
        $categoriaDAO = new CategoriaDAO();
        $retorno = $categoriaDAO->buscar_todas();

        // Mostrar a view
        require_once "Views/listar_categorias.php";
    }

    public function inserir()
    {
        $erro = "";
        if($_POST)
        {
            // Verificar se descritivo está preenchida
            if(empty($_POST["descritivo"]))
            {
                $erro = "Preencha todos os campos";
            }
            else
            {
                // Inserir a nova categoria no bd
                $categoria = new Categoria(descritivo: $_POST["descritivo"]);
                $categoriaDAO = new CategoriaDAO();
                $retorno = $categoriaDAO->inserir($categoria);

                header("Location: index.php?controle=CategoriaController&metodo=listar&msg=$retorno");
            }
        }
        // Mostrar a view
        require_once "Views/form_categoria.php";
    }

    public function alterar()
    {
        $erro = "";
        if($_POST)
        {
             // Verificar se descritivo está preenchida
             if(empty($_POST["descritivo"]))
             {
                 $erro = "Preencha todos os campos";
             }
             else
             {
                 // Alterar a categoria no bd
                 $categoria = new Categoria($_POST["id_categoria"], $_POST["descritivo"]);
                 $categoriaDAO = new CategoriaDAO();
                 $retorno = $categoriaDAO->alterar($categoria);
 
                 header("Location: index.php?controle=CategoriaController&metodo=listar&msg=$retorno");
             }
        }
        if(isset($_GET["id"]))
        {
            $categoria = new Categoria($_GET["id"]);

            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->buscar_uma_categoria($categoria);

            require_once "Views/editar_categoria.php";
        }
    }

    public function excluir()
    {
        if(isset($_GET["id"]))
        {
            $categoria = new Categoria($_GET["id"]);
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->excluir($categoria);

            header("Location: index.php?controle=CategoriaController&metodo=listar&msg=$retorno");
        }
    }
}
?>