<?php
class Modelo
{
    public function __construct(
        private string $descritivo = ""
    ){}


    //========== Métodos GET ==========

    public function getDescritivo()
    {
        return $this->descritivo;
    }


    //========== Métodos SET ==========

    public function setDescritivo($descritivoModelo)
    {
        $this->descritivo = $descritivoModelo;
    }
}
?>