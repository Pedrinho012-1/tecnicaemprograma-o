<?php
require_once "./FornecedorClass.php";
require_once "./ProdutoClass.php";

$fornecedor1 = new Fornecedor("111.111.111/0001-11", "Faber Castell", new Produto());
$produto1 = new Produto("Lápis preto", "Lápis preto número 2", 3.5, array($fornecedor1));

$fornecedor2 = new Fornecedor("222.222.222/0002-22", "Corinthians", new Produto());
$produto1->setFornecedor($fornecedor2);

/*
echo "<pre>";
var_dump($produto1);
echo "</pre>";
*/

echo "Nome: {$produto1->getNome()}<br>";
echo "Descrição: {$produto1->getDescricao()}<br>";
echo "Preço: " . number_format($produto1->getPreco(), 2, ",", ".") . "<br>";
echo "Fornecedores: <br>";

foreach($produto1->getFornecedor() as $dado)
{
    /*
    for($x = 1; $x ; $x++)
    {
        echo "Fornecedor ", $x, ": <br>";
    }
    */
    echo "| CNPJ: {$dado->getCnpj()}<br>";
    echo "| Razão Social: {$dado->getRazaoSocial()}<br>";
}

$produto2 = new Produto("Lápis Marrom", "Lápis Marrom número 7", 4.9, array());
$fornecedor3 = new Fornecedor("222.222.222/0002-22", "Corinthians", $produto2);

echo "CNPJ: {$fornecedor3->getCnpj()}<br>";
echo "Razão Social: {$fornecedor3->getRazaoSocial()}";
echo "Produto: <br>";
echo "Nome: {$fornecedor3->getProduto()->getNome()}";
?>