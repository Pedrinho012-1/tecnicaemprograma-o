<?php
    abstract class Conexao
    {
        public function __construct(protected $db = null)
        {
            $parametro = "mysql:host=localhost;dbname=pets";
            $this->db = new PDO($parametro, "root", "");
        }
    }
?>