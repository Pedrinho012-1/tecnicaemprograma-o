<?php
class Usuario {
    protected $id_usuario;
    protected $nome;
    protected $email;
    protected $senha;
    protected $perfil;

    public function __construct($id_usuario = null, $nome = null, $email = null, $senha = null, $perfil = null) {
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->perfil = $perfil;
    }

    public function getIdUsuario(){
        return $this->id_usuario;
        
    }
    public function getNome() {
        return $this->nome;
    }

    public function getEmail()
    { return $this->email; }
    public function getSenha() { 
        return $this->senha; 
    }
    public function getPerfil() {
        return $this->perfil; 
    }

    public function setNome($nome){
         $this->nome = $nome; 
        }
    public function setEmail($email) {
         $this->email = $email;
    }
    public function setSenha($senha){ 
        $this->senha = $senha;
    }
    public function setPerfil($perfil){
        $this->perfil = $perfil;
    }
}
