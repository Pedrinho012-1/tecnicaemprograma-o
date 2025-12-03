<?php
class Celular {
    private $id_celular;
    private $ddd;
    private $numero;
    private $usuario;

    public function __construct($id_celular = null, $ddd = null, $numero = null, $usuario = null) {
        $this->id_celular = $id_celular;
        $this->ddd = $ddd;
        $this->numero = $numero;
        $this->usuario = $usuario;
    }

    public function getIdCelular(){ 
        return $this->id_celular; 
    }

    public function getDDD(){
         return $this->ddd; 
        }
    public function getNumero() {
         return $this->numero;
         }
    public function getUsuario() {
         return $this->usuario;
         }

    public function setDDD($ddd){ 
        $this->ddd = $ddd; 
    }
    public function setNumero($numero) { 
        $this->numero = $numero; 
    }
    public function setUsuario($usuario) {
         $this->usuario = $usuario; 
        }
}
