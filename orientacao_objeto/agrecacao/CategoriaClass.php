<?php
class Categoria {
    public function __construct(
        private string $descricao = ""
    ){}

    //========== Métodos GET ==========

    public function getDescricao()
    {
        return $this->descricao;
    }


    //========== Métodos SET ==========

    public function setDescricao($descricaoCategoria)
    {
        $this->descricao = $descricaoCategoria;
    }
}
?>