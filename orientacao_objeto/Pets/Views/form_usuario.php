<?php

require_once "../DAO/Conexao.php";
require_once "../Models/UsuarioClass.php";
require_once "../DAO/UsuarioDAO.php";

$msg = array("", "", "", "", "", "");
$erro = false;
$nome = "";
$celular = "";
$email = "";
$senha = "";
$confirmar_senha = "";


if($_POST)
{
    if(empty($_POST["nome"]))
    {
        $msg[0] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $nome = $_POST["nome"];
    }

    if(empty($_POST["celular"]))
    {
        $msg[1] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $celular = $_POST["celular"];
    } 

    if(empty($_POST["email"]))
    {
        $msg[2] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $email = $_POST["email"];
    }

    if(empty($_POST["senha"]))
    {
        $msg[3] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $senha = $_POST["senha"];
    } 

    if(empty($_POST["confirmar_senha"]))
    {
        $msg[4] = "Confirme a senha";
        $erro = true;
    }
    else
    {
        $confirmar_senha = $_POST["confirmar_senha"];
    }

    if($_POST["senha"] != "" && $_POST["confirmar_senha"] != "")
    {
        if($_POST["senha"] != $_POST["confirmar_senha"])
        {
            $msg[5] = "Senhas não conferem";
            $erro = true;
        }
    }

    if(!$erro)
    {
        $usuario = new Usuario(0 ,$_POST["nome"], $_POST["celular"], $_POST["email"], md5($_POST["senha"]));

        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->insert($usuario);
        echo $retorno;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Usuários</title>
        <link rel="stylesheet" href="../styles/forms.css">
    </head>

    <body>
        <form class="forms" action="#" method="POST">
            <h1>Usuário</h1>
            <br><br>
            <div class="div_inputs">
                <label>Nome: </label>
                <input type="text" name="nome" tabindex="1" value="<?php echo $nome; ?>">
                <div class="erro"><?php echo $msg[0]; ?></div>
                <br>

                <label>Celular: </label>
                <input type="text" name="celular" tabindex="2" value="<?php echo $celular; ?>">
                <div class="erro"><?php echo $msg[1]; ?></div>
                <br>

                <label>Email: </label>
                <input type="text" name="email" tabindex="3" value="<?php echo $email; ?>">
                <div class="erro"><?php echo $msg[2]; ?></div>
                <br>

                <label>Senha: </label>
                <input type="password" name="senha" tabindex="4" value="<?php echo $senha; ?>">
                <div class="erro"><?php echo $msg[3]; echo $msg[5]; ?></div>
                <br>

                <label>Confirmar Senha: </label>
                <input type="password" name="confirmar_senha" tabindex="5" value="<?php echo $confirmar_senha; ?>">
                <div class="erro"><?php echo $msg[4]; echo $msg[5]; ?></div>
                <br>
            </div>

            <br><br>
            <input type="submit" value="Enviar" tabindex="6">
        </form>
        <br>
    </body>
</html>