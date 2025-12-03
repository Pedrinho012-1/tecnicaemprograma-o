<?php
require_once "./AtorClass.php";
require_once "./FilmeClass.php";
require_once "./AtuacaoClass.php";

$ator1 = new Ator("Leonardo", "Americana");
$filme1 = new Filme("Titanic", "2 horas");
$filme2 = new Filme("Ilha do Medo", "3 horas");

$atuacao1 = new Atuacao("Jack", $filme1, $ator1);

echo "Filme: {$atuacao1->getFilme()->getTitulo()}<br>";
echo "Duração: {$atuacao1->getFilme()->getDuracao()}<br>";
echo "Ator: {$atuacao1->getAtor()->getNome()}<br>";
echo "Nacionalidade: {$atuacao1->getAtor()->getNacionalidade()}<br>";
echo "Papel: {$atuacao1->getPapel()}<br><br>";
?>