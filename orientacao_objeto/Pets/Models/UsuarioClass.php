<?php
    class Usuario
    {
        public function __construct(
            private int $id_usuario = 0,
            private string $nome = "",
            private string $celular = "",
            private string $email = "", 
            private string $senha = ""
        ){}


        //========== Métodos GET ==========

        public function getIdUsuario()
        {
            return $this->id_usuario;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getCelular()
        {
            return $this->celular;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getSenha()
        {
            return $this->senha;
        }


        //========== Métodos SET ==========

        public function setIdUsuario($id_usuario)
        {
            $id_usuario = $this->id_usuario;
        }

        public function setNome($nome)
        {
            $nome = $this->nome;
        }
    }
?>