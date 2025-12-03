<?php
    class Cliente
    {
        public function __construct
        (
            // Atributos da Classe
            private string $nome = "",
            private string $cpf = "",
            private string $celular = ""
        ){}

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nomeCliente)
        {
            $this->nome = $nomeCliente;
        }

        public function insert()
        {
            
        }
    }
?>