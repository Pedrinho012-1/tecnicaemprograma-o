<?php
class Evento {
    private $id_evento;
    private $nome;
    private $data;
    private $horario_inicio;
    private $horario_fim;
    private $vagas;
    private $tipo;
    private $responsavel;
    private $patrocinadores = [];
    private $participantes = [];

    public function __construct($id_evento = null, $nome = null, $data = null, $inicio = null, $fim = null, $vagas = null) {
        $this->id_evento = $id_evento;
        $this->nome = $nome;
        $this->data = $data;
        $this->horario_inicio = $inicio;
        $this->horario_fim = $fim;
        $this->vagas = $vagas;
    }

    public function getIdEvento() {
         return $this->id_evento;
         }
    public function getNome() {
        return $this->nome; 
    }
    public function getData() {
        return $this->data;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo; 
    }
    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
     }
    public function adicionarPatrocinador($p) {
        $this->patrocinadores[] = $p;
    }
    public function adicionarParticipante($p) {
        $this->participantes[] = $p;
    }
}
