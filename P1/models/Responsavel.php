<?php
require_once "Usuario.php";

class Responsavel extends Usuario {
    private $id_responsavel;
    private $titulacao;

    public function __construct($id_responsavel = null, $titulacao = null) {
        $this->id_responsavel = $id_responsavel;
        $this->titulacao = $titulacao;
    }

    public function getIdResponsavel(){ 
        return $this->id_responsavel; 
    }
    public function getTitulacao() {
        return $this->titulacao;
    }

    public function setTitulacao($titulacao) {
         $this->titulacao = $titulacao;
         }
}
