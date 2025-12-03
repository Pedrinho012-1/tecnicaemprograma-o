<?php
	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function autenticacao($usuario)
		{
			$sql = "SELECT nome, tipo FROM usuarios WHERE email = ? AND senha = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $usuario->getEmail());
				$stm->bindValue(2,$usuario->getSenha());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ); 
			}
			catch(PDOException $e)
			{
				$this->db = null;
				//return "Problema na autenticação do usuário";
				return $e->getMessage();
			}
		}
	}
?>