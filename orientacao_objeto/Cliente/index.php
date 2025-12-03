<?php
    // Arquivo "ClienteClass.php" é requirido para buscar a classe Cliente.
    require_once "ClienteClass.php";

    // Cliente 1
    $cliente1 = new Cliente("Bruno", "123456789", "(14)99999999");

    /* Como os atributos da Classe são privados, então para pegar
    o valor que esta armazenado nos objetos, utilizamos a função */
    echo "{$cliente1->getNome()}<br>";

    $cliente1->setNome("Bruno Righi");

    echo "{$cliente1->getNome()}<br>";

    /*
    $cliente1->nome = "Bruno";
    $cliente1->cpf = "123456789";
    $cliente1->celular = "(14)99999999";
    */

    echo "<pre>";
    var_dump($cliente1);
    echo "</pre>";
    echo "<br><br>";

    // Cliente 2
    $cliente2 = new Cliente("Ana", "987654321", "(19)333333333");
    /*
    $cliente2->nome = "Ana";
    $cliente2->cpf = "987654321";
    $cliente2->celular = "(19)333333333";
    */

    echo "<pre>";
    var_dump($cliente2);
    echo "</pre>";
    echo "<br><br>";

    // Cliente 3
    $cliente3 = new Cliente();

    echo "<pre>";
    var_dump($cliente3);
    echo "</pre>";
    echo "<br><br>";

    // Cliente 4
    $cliente4 = new Cliente(celular:"(14)8888888");

    echo "<pre>";
    var_dump($cliente4);
    echo "</pre>";
    echo "<br><br>";
?>