<?php
class Celular {
    public function __construct(
        private int $ddd = 0,
        private string $numero = ""
    ){}


    //========== Métodos GET ==========

    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
    }


    //========== Métodos SET ==========

    public function setDdd($dddCelular)
    {
        $this->ddd = $dddCelular;
    }

    public function setNumero($numeroCelular)
    {
        $this->numero = $numeroCelular;
    }
}
?>