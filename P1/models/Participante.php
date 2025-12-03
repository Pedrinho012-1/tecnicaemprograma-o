<?php
require_once "Usuario.php";

class Participante extends Usuario {
    private int $id_participante;
    private string $RA;

    public function __construct($id_participante = null, $RA = null) {
        $this->id_participante = $id_participante;
        $this->RA = $RA;
    }

    public function getIdParticipante() {
         return $this->id_participante; 
        }
    public function getRA(){
         return $this->RA; 
        }
    public function setRA($RA){ 
        $this->RA = $RA;
     }
}
