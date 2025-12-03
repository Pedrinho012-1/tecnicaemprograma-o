<?php
class Reserva
{
    public function __construct(
        private string $data_reserva = "",
        private string $data_entrada = "",
        private string $data_saida = "",
        private Funcionario $funcionario,
        private Hospede $hospede,
        private Quartos $quartos
    ){}


    //========== Métodos GET ==========

    public function getDataReserva()
    {
        return $this->data_reserva;
    }

    public function getDataEntrada()
    {
        return $this->data_entrada;
    }

    public function getDataSaida()
    {
        return $this->data_saida;
    }

    public function getFuncionario()
    {
        return $this->funcionario;
    }

    public function getHospede()
    {
        return $this->hospede;
    }

    public function getQuartos()
    {
        return $this->quartos;
    }


    //========== Métodos SET ==========

    public function setDataReserva($data_reservaReserva)
    {
        $this->data_reserva = $data_reservaReserva;
    }

    public function setDataEntrada($data_entradaReserva)
    {
        $this->data_entrada = $data_entradaReserva;
    }

    public function setDataSaida($data_saidaReserva)
    {
        $this->data_saida = $data_saidaReserva;
    }

    public function setFuncionario($funcionarioReserva)
    {
        $this->funcionario = $funcionarioReserva;
    }

    public function setHospede($hospedeReserva)
    {
        $this->hospede = $hospedeReserva;
    }

    public function setQuartos($quartosReserva)
    {
        $this->quartos = $quartosReserva;
    }
}
?>