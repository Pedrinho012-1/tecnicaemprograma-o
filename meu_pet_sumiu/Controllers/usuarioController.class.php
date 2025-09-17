<?php
	require_once "Models/Conexao.class.php";
	require_once "Models/usuarioDAO.class.php";
	require_once "Models/Usuarios.class.php";
	require_once "config.php";
	class UsuarioController
	{
		public function login()
		{
			$msg = array("","","");
			$erro = false;

			if($_POST)
			{
				//verificar os dados
				if(empty($_POST["email"]))
				{
					$msg[0] =  "Preencha o e-mail";
					$erro = true;
				}
				if(empty($_POST["senha"]))
				{
					$msg[1] = "Preencha a senha";
					$erro = true;
				}
				//verificar no banco de dados se existe esse usuário
				if (!$erro)
				{
						$usuario = new Usuarios(email:$_POST["email"]);
						$usuarioDAO = new usuarioDAO();
						$retorno = $usuarioDAO->login($usuario);
						if(is_array($retorno))
					        {
						       if(count($retorno) > 0){
						   
						 	   //verificar se a senha corresponde
							   if(password_verify($_POST['senha'],$retorno[0]->senha))
							   {
								//logar
								   //logado
								   if(!isset($_SESSION))
								   {
										session_start();
								   }
								   $_SESSION["nome"] = $retorno[0]->nome;
								   $_SESSION["id"] = $retorno[0]->id_usuario;
								   $_SESSION["email"] = $retorno[0]->email;
								   header("location:index.php");
							    }
							    else
							    {
								 $msg[2] = "verifique os dados digitados-email";
								   
							    }
							  }
							 	 else
				            	 {
					 			$msg[2] = "verifique os dados digitados-email";
					      		 }
				            }			             
				   }
			}
			require_once "views/login.php";

		}//fim do login
		public function inserir()
		{
			$msg = array("","","","");
			$erro = false;
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o nome";
					$erro = true;
				}
				if(empty($_POST["email"]))
				{
					$msg[1] = "Preencha o email";
					$erro = true;
				}
				else
				{
					//verificar se já não tem um usuário com esse email cadastrado
					$usuario = new Usuarios(email:$_POST["email"]);
					$usuarioDAO = new usuarioDAO();
					$retorno = $usuarioDAO->verificar_email($usuario);
					if(is_array($retorno))
					{
						if(count($retorno) > 0)
						{
							$msg[1] = "E-mail já está cadastrado";
							$erro = true;
						}
					}
				}
				if(empty($_POST["senha"]))
				{
					$msg[2] = "Preencha o senha";
					$erro = true;
				}
				if(empty($_POST["celular"]))
				{
					$msg[3] = "Preencha o celular";
					$erro = true;
				}
				if(!$erro)
				{
					$usuario = new Usuarios(0,$_POST["nome"], $_POST["email"], password_hash($_POST["senha"], PASSWORD_DEFAULT), $_POST["celular"]);
					//cadastrar no banco de dados
					$usuarioDAO = new usuarioDAO();
					$retorno = $usuarioDAO->inserir($usuario);
					//verificar se a senha corresponde 
					
					}
				}
				
			 require_once "Views/form_usuario.php";
			}//fim do inserir
			public function logout()
			{
				if(!isset($_SESSION))
				{
					session_start();
				}
				$_SESSION = array();
				session_destroy();
				header("location:index.php");
			}//fim do logout
			public function esqueci_senha()
			{
				 $msg = "sera enviado um e-mail para a recuperar a senha";
				 if($_POST)
				 {
					 if(empty($_POST["email"]))
					 {
						$msg = "preencha o e-mail";
					 }
					 else
					 {
						//verficar se é um email de algum úsuario do sistema
						
						$usuario = new Usuarios(email:$_POST["email"]);
						$usuarioDAO = new usuarioDAO();
						$retorno = $usuarioDAO->verificar_email($usuario);
						if(is_array($retorno)) 
						{
							 if(count($retorno) > 0)
							 {
								// enviar email
								$assunto = "recuperação de senha - meu pet sumiu"; 
								$link = "index.php?controle=Usuariocontroller&metodo=trocar_senha&id=" . base64_encode($retorno[0]->id_usuario);

								$nomeDestino = $retorno[0]->nome;
								$destino = $retorno[0]->email;

								$remetente = "seu email";
								$nomeRemetente =  "meu pet sumiu";
								$mensagem = "<h2>senhor(a) " . $nomeDestino . "</h2><br /><p>
								recebemos a solicitação de recuperação de senha.
								caso não tenha sido requerida por voce desconsidere essa mensagem. caso contrario click no link abaixo para informar nova senha.</p>
								<a href = " . $link . " >clique aqui<a/>
								<br></br>
								<p>atenciosamente" . $nomeRemetente . "</p>";
								
								
								$ret = sendMail($assunto, $mensagem, $remetente, $nomeRemetente, $destino, $nomeDestino);
						    
							if($ret)
							{
                                 $msg_email = "Foi enviado um email de recuperação de senha. verifique!!!";
							}
							else
							{
								$msg_email = "problema no envio do email de  de recuperação de senha. tente mais tarde!!!";
							}
							
						}
						else
						{
							$msg = "Verifique o e-mail informado";
						}
					  }
						else
						{
						   $msg = "verifique o e-mail informado";
						}
					 }

				 }
				require_once "Views/form_email.php";
			}
	}//fim da classe
?>