<?php  
    class UsuarioDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }

        public function insert($usuario)
        {
            $sql = "INSERT INTO usuarios (nome, celular, email, senha) VALUES(?, ?, ?, ?)";
    
            $stm = $this->db->prepare($sql);
    
            $stm->bindValue(1, $usuario->getNome());
            $stm->bindValue(2, $usuario->getCelular());
            $stm->bindValue(3, $usuario->getEmail());
            $stm->bindValue(4, $usuario->getSenha());
            $stm->execute();

            $this->db = null;
            return "Usuário inserido com sucesso!";
        }
    }
?>