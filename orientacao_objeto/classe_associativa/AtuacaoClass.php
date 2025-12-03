<?php
class Atuacao
{
    public function __construct(
        private string $papel = "",
        private $filme = null,
        private Ator $ator = new Ator()
    ){}


    //========== Métodos GET ==========

    public function getPapel()
    {
        return $this->papel;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function getAtor()
    {
        return $this->ator;
    }


    //========== Métodos SET ==========

    public function setPapel($papelAtuacao)
    {
        $this->papel = $papelAtuacao;
    }

    public function setFilme($filmeAtuacao)
    {
        $this->filme = $filmeAtuacao;
    }

    public function setAtor($atorAtuacao)
    {
        $this->ator = $atorAtuacao;
    }
}
?>