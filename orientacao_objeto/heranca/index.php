<?php
    require_once "ContaClass.php";
    require_once "ContaCorrenteClass.php";
    require_once "ContaPoupancaClass.php";

    $poupanca = new ContaPoupanca(12, "123-4", "3456-7", 1000);
    $corrente = new ContaCorrente(3000, "123-4", "3456-7", 5000);

    echo "<pre>";
    var_dump($poupanca);
    echo "</pre>";

    // $conta = new Conta("123-4", "3456-7", 1000); --> Essa linha vai dar erro, pois a classe está abstrada

    $poupanca->sacar(500);
    echo "<br>";
    echo "Saldo: {$poupanca->getSaldo()}";

    echo "<br><br>";

    $corrente->sacar(6000);
    echo "<br>";
    echo "Saldo: {$corrente->getSaldo()}";
?>