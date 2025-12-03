<?php
    require_once "./ProdutoClass.php";
    require_once "./CategoriaClass.php";

    $categoria1 = new Categoria("Material Escolar");
    $categoria2 = new Categoria("Material de Escritório");

    $produto1 = new Produto("Lápis Preto", 1.78, array($categoria1));
    $produto2 = new Produto("Apostila ATLAS", 24.99, array($categoria1));

    $produto1->setCategoria($categoria2);

    /*
    echo "<pre>";
    var_dump($produto1);
    echo "</pre>";

    echo "<pre>";
    var_dump($produto2);
    echo "</pre>";
    */

    echo "Produto 1: <br>";
    echo "Nome: {$produto1->getNome()}<br>";
    echo "Preço: {$produto1->getPreco()}<br>";
    echo "Categoria(s): <br>";
    foreach($produto1->getCategoria() as $categoria)
    {
        echo "== {$categoria->getDescricao()} == <br>";
    }
?>