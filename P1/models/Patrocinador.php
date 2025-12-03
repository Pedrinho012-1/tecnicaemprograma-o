<?php
class Patrocinador {
    private $conn;
    private $table_name = "Patrocinador";

    public $id_patrocinador;
    public $nome;
    public $logotipo;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nome, logotipo) VALUES (:nome, :logotipo)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":logotipo", $this->logotipo);
        return $stmt->execute();
    }
}
