<?php

abstract class Conta
{
    public function __construct(
        protected string $agencia = "",
        protected string $conta = "",
        protected float $saldo = 0.00
    ){}

    // Método criado para ser usado nas classes filhas (polimorfismo)
    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }


    // ==================== GETs ====================

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    // ==================== SETs ====================

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
}

?>