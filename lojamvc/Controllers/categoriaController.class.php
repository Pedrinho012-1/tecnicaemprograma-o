<?php
	require_once "Models/Conexao.class.php";
	require_once "Models/categoriaDAO.class.php";
	require_once "Models/Categoria.class.php";
	class categoriaController
	{
		public function listar()
		{
			//buscar os dados no banco
			$categoriaDAO = new categoriaDAO();
			$retorno = $categoriaDAO->buscar_todas();
			require_once "views/listar_categorias.php";
			//mostra a view
		}//fim do método listar
		public function inserir()
		{
			$erro = "";
			if($_POST)
			{
				//verificar se descrição preenchida
				if(empty($_POST["descritivo"]))
				{
					$erro = "Preencha o descritivo";
				}
				else
				{
					//inserir a nova categoria no bd
					$categoria = new Categoria(0,$_POST["descritivo"]);
					
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO->inserir($categoria);
					header("location:/lojamvc/listar");
				}
			}
			require_once "Views/form_categoria.php";
		}
		public function alterar($id)
		{
			$erro = "";
				if (!ctype_digit($id)) {
				// Resposta para id inválido
					http_response_code(400); // Bad Request
					echo "ID inválido.";
					return;
				}

				// Converta para inteiro se quiser garantir tipo
				$id = (int)$id;
				$categoria = new Categoria($id);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->buscar_uma_categoria($categoria);
				
			
			require_once "Views/edit_categoria.php";
		}
		public function edit()
		{
			$erro = "";
			if($_POST)
			{
				if(empty($_POST["descritivo"]))
				{
					$erro = "Preencha o descritivo";
				}
				else
				{
					//alterar a categoria no bd
					$categoria = new Categoria($_POST["id_categoria"],$_POST["descritivo"]);
					
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO->alterar($categoria);
					header("location:/lojamvc/listar");
				}
			}
			
			require_once "Views/edit_categoria.php";
		}
		public function excluir($id)
		{
			$erro = "";
			if (!ctype_digit($id)) {
			// Resposta para id inválido
				http_response_code(400); // Bad Request
				echo "ID inválido.";
				return;
			}

			// Converta para inteiro se quiser garantir tipo
			$id = (int)$id;
			$categoria = new Categoria($id);
			$categoriaDAO = new categoriaDAO();
			$retorno = $categoriaDAO->excluir($categoria);
			header("location:/lojamvc/listar");
			
		}
	}//fim da classe
?>