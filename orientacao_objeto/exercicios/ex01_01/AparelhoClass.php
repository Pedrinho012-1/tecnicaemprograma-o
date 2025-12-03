<?php
class Aparelho
{
    public function __construct(
        private string $descritivo = "",
        private Modelo $modelo = new Modelo(),
        private Cliente $cliente
    ){}


    //========== Métodos GET ==========

    public function getDescritivo()
    {
        return $this->descritivo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getCliente()
    {
        return $this->cliente;
    }


    //========== Métodos SET ==========

    public function setDescritivo($descritivoAparelho)
    {
        $this->descritivo = $descritivoAparelho;
    }

    public function setModelo(Modelo $modeloAparelho)
    {
        $this->modelo = $modeloAparelho;
    }

    public function setCliente(Cliente $clienteAparelho)
    {
        $this->cliente = $clienteAparelho;
    }
}
?>