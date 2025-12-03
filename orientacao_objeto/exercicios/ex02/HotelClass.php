<?php
class Hotel
{
    public function __construct(
        private string $cnpj = "",
        private string $razao_social = "",
        int $numero,
        int $andar
    )
    {
        $this->quartos[] = new Quartos($numero, $andar, $this);
    }


    //========== Métodos GET ==========

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    public function getQuartos()
    {
        return $this->quartos;
    }


    //========== Métodos SET ==========

    public function setCnpj($cnpjHotel)
    {
        $this->cnpj = $cnpjHotel;
    }

    public function setRazaoSocial($razao_socialHotel)
    {
        $this->razao_social = $razao_socialHotel;
    }

    public function setQuartos($numero, $andar)
    {
        $this->quartos[] = new Quartos($numero, $andar, $this);
    }
}
?>