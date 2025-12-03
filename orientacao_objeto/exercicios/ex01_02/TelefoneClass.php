<?php
class Telefone
{
    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
        private Pessoa $pessoa
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

    public function getPessoa()
    {
        return $this->pessoa;
    }


    //========== Métodos SET ==========

    public function setDdd($dddTelefone)
    {
        $this->ddd = $dddTelefone;
    }

    public function setNumero($numeroTelefone)
    {
        $this->numero = $numeroTelefone;
    }

    public function setPessoa($pessoaTelefone)
    {
        $this->pessoa = $pessoaTelefone;
    }
}
?>