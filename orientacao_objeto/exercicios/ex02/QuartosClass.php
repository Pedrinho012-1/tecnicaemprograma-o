<?php
class Quartos
{
    public function __construct(
        private int $numero = 0,
        private int $andar = 0,
        private Hotel $hotel,
        private array $reserva = array()
    ){}


    //========== Métodos GET ==========

    public function getNumero()
    {
        return $this->numero;
    }

    public function getAndar()
    {
        return $this->andar;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    public function getReserva()
    {
        return $this->reserva;
    }


    //========== Métodos SET ==========

    public function setNumero($numeroQuartos)
    {
        $this->numero = $numeroQuartos;
    }

    public function setAndar($andarQuartos)
    {
        $this->andar = $andarQuartos;
    }

    public function setHotel($hotelQuartos)
    {
        $this->hotel = $hotelQuartos;
    }

    public function setReserva($reservaQuartos)
    {
        $this->reserva = $reservaQuartos;
    }
}
?>