<?php

final class ContaPoupanca extends Conta
{
    public function __construct(
        // Atributo do construtor da classe ContaPoupanca
        private int $aniversario = 0,

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
        $data = explode("/", date("Y/m/d"));
        if($data[2] > $this->aniversario && $this->saldo >= $valor)
        {
            parent:: sacar($valor);
        }
        else
        {
            echo "Problema no saque, seu verme";
        }
    }

    // ==================== GET ====================
    public function getAniversario()
    {
        return $this->aniversario;
    }

    // ==================== SET ====================
    public function setAniversario($aniversario)
    {
        $this->aniversario = $aniversario;
    }
}

?>