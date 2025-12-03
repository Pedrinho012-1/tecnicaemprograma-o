<?php
class Tipo {
    private $id_tipo;
    private $descritivo;

    public function __construct($id_tipo = null, $descritivo = null) {
        $this->id_tipo = $id_tipo;
        $this->descritivo = $descritivo;
    }

    public function getIdTipo(){ 
        return $this->id_tipo;
     }
    public function getDescritivo(){ 
        return $this->descritivo; 
    }
    public function setDescritivo($d) {
        $this->descritivo = $d;
    }
}
