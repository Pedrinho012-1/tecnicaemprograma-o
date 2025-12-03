<?php
final class Cliente extends Pessoa
{
    public function __construct(
        private string $cpf = "",
        string $nome,
        int $ddd,
        string $numero
    )
    {
        parent:: __construct($nome, $ddd, $numero);
    }


    //========== Métodos GET ==========

    public function getCpf()
    {
        return $this->cpf;
    }


    //========== Métodos SET ==========

    public function setCpf($cpfCliente)
    {
        $this->cpf = $cpfCliente;
    }
}
?>