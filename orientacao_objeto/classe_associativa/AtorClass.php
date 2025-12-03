<?php
class Ator
{
    public function __construct(
        private string $nome = "",
        private string $nacionalidade = ""
    ){}


    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }


    //========== Métodos SET ==========

    public function setNome($nomeAtor)
    {
        $this->nome = $nomeAtor;
    }

    public function setNacionalidade($nacionalidadeAtor)
    {
        $this->nacionalidade = $nacionalidadeAtor;
    }
}
?>