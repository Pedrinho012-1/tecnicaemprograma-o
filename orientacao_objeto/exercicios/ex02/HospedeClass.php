<?php
final class Hospede extends Pessoa
{
    public function __construct(
        private string $cpf = "",
        string $nome,
        private array $reserva = array()
    )
    {
        parent:: __construct($nome);
    }


    //========== Métodos GET ==========

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getReserva()
    {
        return $this->reserva;
    }


    //========== Métodos SET ==========

    public function setCpf($cpfHospede)
    {
        $this->cpf = $cpfHospede;
    }

    public function setReserva($reservaHospede)
    {
        $this->reserva = $reservaHospede;
    }
}
?>