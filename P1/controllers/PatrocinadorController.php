<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Patrocinador.php";

class PatrocinadorController {

    public function createForm() {
        include __DIR__ . "/../views/patrocinador/create.php";
    }

    public function store() {
        $database = new Database();
        $db = $database->getConnection();

        $patrocinador = new Patrocinador($db);
        $patrocinador->nome = $_POST['nome'];
        $patrocinador->logotipo = $_POST['logotipo'];

        if ($patrocinador->create()) {
            include __DIR__ . "/../views/patrocinador/success.php";
        } else {
            echo "Erro ao cadastrar patrocinador.";
        }
    }
}
