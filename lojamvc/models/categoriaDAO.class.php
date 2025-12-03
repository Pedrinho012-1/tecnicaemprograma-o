<?php
	class categoriaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($categoria)
		{
			$sql = "INSERT INTO categorias (descritivo) VALUES(?)";
			try
			{
				//preparar frase
				$stm = $this->db->prepare($sql);
				//substituir o ponto de interrogação
				$stm->bindValue(1, $categoria->getDescritivo());
				
				//executar a frase sql
				$stm->execute();
				//fechar a conexão
				$this->db = null;
				return "Categoria inserida com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao inserir categoria";
			}
		}//fim do método inserir
		public function alterar($categoria)
		{
			$sql = "UPDATE categorias SET descritivo = ? WHERE id_categoria = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $categoria->getDescritivo());
				$stm->bindValue(2, $categoria->getId_categoria());
				$stm->execute();
				$this->db = null;
				return "Categoria alterada com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao alterar categoria";
			}
		}
		
		public function excluir($categoria)
		{
			$sql = "DELETE FROM categorias WHERE id_categoria = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $categoria->getId_categoria());
				$stm->execute();
				$this->db = null;
				return "Categoria excluida com sucesso";
			}
			catch(PDOException $e)
			{
				//echo $e->getMessage(). "<br><br>";
				$this->db = null;
				if($e->getCode()== 23000)
				{
					return "Categoria não pode ser excluida, pois tem produtos cadastrados para ela.";
				}
			}
		}
		 
		public function buscar_todas()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM categorias";
			try
			{
				//preparar frase
				$stm = $this->db->prepare($sql);
				//executar a frase sql
				$stm->execute();
				//fechar a conexão
				$this->db = null;
				//retornar o resultado da execução da frase sql
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar as categorias";
			}
		}
		public function buscar_uma_categoria($categoria)
		{
			$sql = "SELECT * FROM categorias WHERE id_categoria = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1,$categoria->getId_categoria());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar uma categoria";
			}
		}
		
		
	}//fim da classe categoriaDAO
?>