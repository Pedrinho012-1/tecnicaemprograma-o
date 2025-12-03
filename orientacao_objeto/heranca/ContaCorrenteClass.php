<?php

final class ContaCorrente extends Conta
{
    public function __construct(
        // Atributo do construtor da classe ContaPoupanca
        private float $limite = 0.00,

        // Atributos do construtor da classe Conta, não precisamos colocar private pq são parâmetros
        string $agencia,
        string $conta,
        float $saldo
    )
    {
        // Chamando o construtor da classe Conta
        parent:: __construct($agencia, $conta, $saldo);
    }

    // Método com polimorfismo, porém só conseguimos no PHP utilizando a herança
    public function sacar($valor)
    {
        if($this->saldo + $this->limite >= $valor)
        {
            parent:: sacar($valor);
        }
        else
        {
            echo "Saldo insuficiente";
        }
    }


    // ==================== GET ====================
    public function getLimite()
    {
        return $this->limite;
    }

    // ==================== SET ====================
    public function setLimite($limite)
    {
        $this->limite = $limite;
    }
}

?>