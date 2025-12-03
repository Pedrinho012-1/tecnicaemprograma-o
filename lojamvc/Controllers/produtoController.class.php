<?php
	class produtoController
	{

		public function busca_produtos_categoria()
        {
            $produtoDAO = new produtoDAO();
			if(isset($_GET["idcategoria"]))
			{
				//buscar apenas os produtos da categoria escolhida
				$categoria = new Categoria($_GET["idcategoria"]);
				$produto = new Produto(categoria:$categoria);
				$produtos = $produtoDAO->buscar_produtos_por_categoria($produto); 
				$categoriaController = new categoriaController();
				$retorno = $categoriaController->buscar_categorias_ativas();

			   

				require_once "views/menu.php";
			}
            
        }//fim metodo busca_produtos_categorias

        public function listar()
        {
            $produtoDAO =  new produtoDAO();
			$retorno = $produtoDAO->buscar_todos();
            require_once "views/listar_produtos.php";
        }

        public function inserir()
        {
		   $msg = array("","","","","","", "");
			if($_POST)
			{
				$erro = false;
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o nome do produto";
					$erro = true;
				}
				
				if(empty($_POST["descricao"]))
				{
					$msg[1] = "Preencha a descrição do produto";
					$erro = true;
				}
				
				if(empty($_POST["preco"]))
				{
					$msg[2] = "Preencha o preço do produto";
					$erro = true;
				}

				if(empty($_POST["desconto"]))
				{
					$msg[3] = "Preencha o desconto do produto";
					$erro = true;
				}
				
				if(empty($_POST["estoque"]))
				{
					$msg[4] = "Preencha o estoque do produto";
					$erro = true;
				}
				
				if($_POST["categoria"] == "0")
				{
					$msg[5] = "Escolha uma categoria para o produto";
					$erro = true;
				}
				if($_FILES["imagem"]["name"] == "")
				{
					$msg[6] = "Escolha uma imagem para o produto";
					$erro = true;
				}
				else
				{
					if($_FILES["imagem"]["type"] != "image/png" &&    $_FILES["imagem"]["type"] != "image/jpg" && 
					$_FILES["imagem"]["type"] != "image/jpeg")
					{
						$msg[6] = "Tipo de imagem invalido";
						$erro = true;
					}
				}
				
				if(!$erro)
				{
					//inserir no BD
					$categoria = new Categoria($_POST["categoria"]);
					
					$produto = new Produto(0, $_POST["nome"], $_POST["descricao"], $_POST["preco"],$_POST["desconto"], $_FILES["imagem"]["name"], $_POST["estoque"],"Ativo", $categoria);
					
					$produtoDAO = new produtoDAO();
					
					$produtoDAO->inserir($produto);
					
					header("location:/lojamvc/listarProduto");
					die();
					
				}
				
			}//fim if post
			//buscar categorias BD
					
			$categoriaDAO = new categoriaDAO();
					
			$ret = $categoriaDAO->buscar_todas();
			require_once "Views/form_produto.php"; 
        }
		
        public function alterar($id)
        {
            
        }

		public function edit()
        {
            
        }

        public function alterar_situacao($id, $situacao)
        {

				$produto = new Produto(id_produto: $id, situacao: $situacao);
				$produtoDAO = new produtoDAO();
				$msg = $produtoDAO->mudar_status($produto);
				header("location:/lojamvc/listarProduto");
				die();
        }
		
		public function listarProdutosAtivos()
		{
			$produto = new Produto(situacao: "Ativo");
			$produtoDAO = new produtoDAO();
			$produtos = $produtoDAO->buscar_todos_Ativos($produto);
			header("location:/lojamvc");
		}
    

	}//fim da classe
?>