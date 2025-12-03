<?php
class Filme
{
    public function __construct(
        private string $titulo = "",
        private string $duracao = ""
    ){}


    //========== Métodos GET ==========

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }


    //========== Métodos SET ==========

    public function setTitulo($tituloFilme)
    {
        $this->titulo = $tituloFilme;
    }

    public function setDuracao($duracaoFilme)
    {
        $this->duracao = $duracaoFilme;
    }
}
?>