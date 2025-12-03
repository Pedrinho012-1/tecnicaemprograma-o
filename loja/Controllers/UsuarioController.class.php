<?php
require_once "./Models/Conexao.class.php";
require_once "./Models/UsuarioDAO.class.php";
require_once "./Models/Usuarios.class.php";

if(!isset($_SESSION))
{
    session_start();
}

class UsuarioController
{
    public function login()
    {
        if($_POST)
        {
            $usuario = new Usuario(email:$_POST["email"], senha:$_POST["senha"]);

            $usuarioDAO = new UsuarioDAO();
            $retorno = $usuarioDAO->autenticacao($usuario);

            if (is_array($retorno) && count($retorno) > 0)
            {
                // Usuário encontrado!
                echo "Login efetuado com sucesso!";

                session_start();
                $_SESSION["nome"] = $retorno[0]->nome;
                $_SESSION["tipo"] = $retorno[0]->tipo;
                header("Location: index.php");
                die();
            }
            else
            {
                // Não encontrou o usuário!
                echo "Problema nas credênciais";
            }
        }

        require_once "./Views/login.php";
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();

        header("Location: index.php");
        die();
    }
}
?>