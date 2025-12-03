<?php
abstract class Pessoa
{
    public function __construct(
        protected string $nome = ""
    ){}


    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }


    //========== Métodos SET ==========

    public function setNome($nomePessoa)
    {
        $this->nome = $nomePessoa;
    }
}
?>