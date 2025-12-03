<?php
abstract class Pessoa
{
    public function __construct(
        protected string $nome = "",
        int $ddd,
        string $numero
    )
    {
        $this->telefone[] = new Telefone($ddd, $numero, $this);
    }


    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    
    //========== Métodos SET ==========

    public function setNome($nomePessoa)
    {
        $this->nome = $nomePessoa;
    }

    public function setTelefone($ddd, $numero)
    {
        $this->telefone[] = new Telefone($ddd, $numero, $this);
    }
}
?>