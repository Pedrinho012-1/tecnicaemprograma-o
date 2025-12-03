<?php
	require_once "Models/Conexao.class.php";
	require_once "Models/usuarioDAO.class.php";
	require_once "Models/Usuarios.class.php";
	if(!isset($_SESSION))
	{
		session_start();
	}
	class usuarioController
	{
		public function login()
		{
			if($_POST)
			{
				$usuario = new Usuarios(email:$_POST["email"], senha:$_POST["senha"]);
				
				$usuarioDAO = new usuarioDAO();
				
				$retorno = $usuarioDAO->autenticacao($usuario);
				//var_dump($retorno);
				if(count($retorno) > 0)
				{
					//encontrou o usuário
					echo "Login efetuado com sucesso";
									
				$_SESSION["nome"] = $retorno[0]->nome;
				$_SESSION["tipo"] = $retorno[0]->tipo;
				header("location:/loja");
				//die();
				}
				else
				{
					//não encontrou o usuário
					echo "Problema nas crendenciais";
				}
			}
			require_once "Views/login.php";
		}//fim login
		public function logout()
		{
			
			$_SESSION = array();
			session_destroy();
			header("location:/loja");
			die();
			
		}
	}//fim da classe
?>