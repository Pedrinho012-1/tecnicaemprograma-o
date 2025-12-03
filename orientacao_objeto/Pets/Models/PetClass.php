<!-- Fazendo um teste de mesa utilizando a classe Pet -->

<?php

class Pet
{
    public function __construct(
        private string $nome = "",
        private string $idade = "",
        private string $cor = "",
        private string $raca = "",
        private $usuario = null
    ){}

    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }


    //========== Métodos SET ==========

    public function setNome($nomePet)
    {
        $this->nome = $nomePet;
    }

    public function setIdade($idadePet)
    {
        $this->idade = $idadePet;
    }

    public function setCor($corPet)
    {
        $this->cor = $corPet;
    }

    public function setRaca($racaPet)
    {
        $this->raca = $racaPet;
    }
}

?>