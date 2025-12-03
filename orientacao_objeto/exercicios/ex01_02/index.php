<?php
require_once "./PessoaClass.php";
require_once "./TelefoneClass.php";
require_once "./ClienteClass.php";
require_once "./TecnicoClass.php";
require_once "./AparelhoClass.php";
require_once "./ModeloClass.php";
require_once "./OrcamentoClass.php";


$tecnico1 = new Tecnico("Técnico de Informática", array(), "Wilson", 14, "999999999");
$tecnico1->setTelefone(14, "888888888");
$cliente1 = new Cliente("111.111.111.11", "Bruno", 14, "111111111");
$cliente1->setTelefone(14, "444444444");
$modelo1 = new Modelo("A30");
$aparelho1 = new Aparelho("Samsung Galaxy", $modelo1, $cliente1, array());

$orcamento1 = new Orcamento("26/04/2025", 199.99, "26/04/2026", $tecnico1, $aparelho1);

echo "<h2>======== ORÇAMENTOS =======</h2>";
echo "<h3>|||||| - ORÇAMENTO 1 - ||||||</h3>";
echo "Data do Orçamento: {$orcamento1->getDataOrcamento()}<br>";
echo "Data da Validade: {$orcamento1->getDataValidade()}<br>";
echo "Preço: " . number_format($orcamento1->getPreco(), 2, ",", ".") . "<br><br>";

echo "<h3>Aparelho:</h3> Descritivo: {$orcamento1->getAparelho()->getDescritivo()} <br> Modelo: {$orcamento1->getAparelho()->getModelo()->getDescritivo()}<br>";

echo "<h3>Técnico:</h3> Nome: {$orcamento1->getTecnico()->getNome()} <br> Especialidade: {$orcamento1->getTecnico()->getEspecialidade()} <br> Telefones: ";
foreach($orcamento1->getTecnico()->getTelefone() as $telefonesTecnico)
{
    echo "{$telefonesTecnico->getDdd()} {$telefonesTecnico->getNumero()} - ";
}
echo "<br><h3>Cliente:</h3>  Nome: {$orcamento1->getAparelho()->getCliente()->getNome()} <br> CPF: {$orcamento1->getAparelho()->getCliente()->getCpf()} <br> Telefones: ";
foreach($orcamento1->getAparelho()->getCliente()->getTelefone() as $telefonesCliente)
{
    echo "{$telefonesCliente->getDdd()} {$telefonesCliente->getNumero()} - ";
}
?>