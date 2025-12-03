<?php
class Aparelho
{
    public function __construct(
        private string $descritivo = "",
        private $modelo = null,
        private Cliente $cliente,
        private array $tecnico = array()
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

    public function getTecnico()
    {
        return $this->tecnico;
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

    public function setTecnico(Tecnico $tecnicoAparelho)
    {
        $this->tecnico[] = $tecnicoAparelho;
    }
}
?>