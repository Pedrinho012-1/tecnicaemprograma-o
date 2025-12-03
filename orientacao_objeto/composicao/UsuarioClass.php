<?php
class Usuario {
    public function __construct(
        private string $nome = "",
        private string $cpf = "",
        private string $email = "",
        int $ddd,
        string $numero
    )
    {
        $this->celular[] = new Celular($ddd, $numero);
    }


    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCelular()
    {
        return $this->celular;
    }


    //========== Métodos SET ==========

    public function setNome($nomeUsuario)
    {
        $this->nome = $nomeUsuario;
    }

    public function setCpf($cpfUsuario)
    {
        $this->cpf = $cpfUsuario;
    }

    public function setEmail($emailUsuario)
    {
        $this->email = $emailUsuario;
    }

    public function setCelular($ddd, $numero)
    {
        $this->celular[] = new Celular($ddd, $numero);
    }
}
?>