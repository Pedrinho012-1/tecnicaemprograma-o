<?php
	class produtoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($produto)
		{
			
			$sql = "INSERT INTO produtos (nome, descricao, preco, desconto, imagem, estoque, situacao, id_categoria) VALUES(?,?,?,?,?,?,?,?)";
			try
			{
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $produto->getNome());
			$stm->bindValue(2, $produto->getDescricao());
			$stm->bindValue(3, $produto->getPreco());
			$stm->bindValue(4, $produto->getDesconto());
			$stm->bindValue(5, $produto->getImagem());
			$stm->bindValue(6, $produto->getEstoque());
			$stm->bindValue(7, $produto->getSituacao());
			$stm->bindValue(8, $produto->getCategoria()->getId_categoria());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			return "Produto cadastrado com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao inserir produto";
			}
		}
		public function alterar($produto)
		{
			$sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, desconto = ?, imagem = ?, estoque = ?, id_categoria = ? WHERE id_produto = ?";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getNome());
			$stm->bindValue(2, $produto->getDescricao());
			$stm->bindValue(3, $produto->getPreco());
			$stm->bindValue(4, $produto->getDesconto());
			$stm->bindValue(5, $produto->getImagem());
			$stm->bindValue(6, $produto->getEstoque());
			$stm->bindValue(7, $produto->getCategoria()->getId_categoria());
			$stm->bindValue(8, $produto->getId_produto());
			$stm->execute();
			$this->db = null;
			return "Produto alterado com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao alterar produto";
			}
		}
		
		
		public function buscar_todos()
		{
			//frase sql que será executada
			$sql = "SELECT p.*, c.descritivo FROM produtos as p, categorias as c WHERE p.id_categoria = c.id_categoria";
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
				return "Problema ao buscar todos os produtos";
			}
		}
		public function buscar_um($produto)
		{
			$sql = "SELECT * FROM produtos WHERE id_produto = ?";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$produto->getId_produto());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar um produto";
			}
		}
		public function buscar_produtos_por_categoria($produto)
		{
			$sql = "SELECT * FROM produtos WHERE id_categoria = ?";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$produto->getCategoria()->getId_categoria());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao produtos por categoria";
			}
		}
		public function mudar_status($produto)
		{
			$sql = "UPDATE produtos SET situacao = ? WHERE id_produto = ?";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getSituacao());
			
			$stm->bindValue(2, $produto->getId_produto());
			$stm->execute();
			$this->db = null;
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao alterar situação do produto";
			}
		}

		public function buscar_todos_Ativos($produto)
		{
			//frase sql que será executada
			$sql = "SELECT * FROM produtos WHERE situacao = ?";
			try
			{
				//preparar frase
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $produto->getSituacao());
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
				return "Problema ao buscar todos os produtos";
			}
		}

	}//fim da classe produtoDAO
?>