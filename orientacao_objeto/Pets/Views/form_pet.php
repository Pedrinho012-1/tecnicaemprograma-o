<?php

require_once "../Models/UsuarioClass.php";
require_once "../DAO/Conexao.php";
require_once "../Models/PetClass.php";
require_once "../DAO/PetDAO.php";

$msg = array("", "", "", "");
$erro = false;
$nome = "";
$idade = null;
$cor = "";
$raca = "";


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

    if(empty($_POST["idade"]))
    {
        $msg[1] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $idade = $_POST["idade"];
    }

    if(empty($_POST["cor"]))
    {
        $msg[2] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $cor = $_POST["cor"];
    }

    if($_POST["raca"] == 0)
    {
        $msg[3] = "Selecione uma das opções";
        $erro = true;
    }
    else
    {
        $raca = $_POST["raca"];
    }

    if(!$erro)
    {
        $usuario = new Usuario(1);
        $pet = new Pet($_POST["nome"], $_POST["idade"], $_POST["cor"], $_POST["raca"], $usuario);

        $petDAO = new PetDAO();
        $retorno = $petDAO->insert($pet);
        echo $retorno;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Pets</title>
        <link rel="stylesheet" href="../styles/forms.css">
    </head>

    <body>
        <form class="forms" action="#" method="POST">
            <h1>Pet</h1>
            <br><br>
            <div class="div_inputs">
                <label>Nome: </label>
                <input type="text" name="nome" tabindex="1" value="<?php echo $nome;?>">
                <div class="erro"><?php echo $msg[0]; ?></div>
                <br>

                <label>Idade: </label>
                <input type="text" name="idade" tabindex="2" value="<?php echo $idade;?>">
                <div class="erro"><?php echo $msg[1]; ?></div>
                <br>

                <label>Cor: </label>
                <input type="text" name="cor" tabindex="3" value="<?php echo $cor;?>">
                <div class="erro"><?php echo $msg[2]; ?></div>
                <br>

                <label>Raça: </label>
                <select name="raca" tabindex="4">
                    <option value="0">Escolha a raça</option>
                    <option value="Pitbull" <?php if (isset($_POST['raca']) && $_POST['raca'] == "Pitbull") echo 'selected'; ?>>Pitbull</option>
                    <option value="Lhasa" <?php if (isset($_POST['raca']) && $_POST['raca'] == "Lhasa") echo 'selected'; ?>>Lhasa</option>
                    <option value="Yorkshare" <?php if (isset($_POST['raca']) && $_POST['raca'] == "Yorkshare") echo 'selected'; ?>>Yorkshare</option>
                    <option value="Indefinido" <?php if (isset($_POST['raca']) && $_POST['raca'] == "Indefinido") echo 'selected'; ?>>Indefinido</option>
                </select>
                <div class="erro"><?php echo $msg[3]; ?></div>
            </div>

            <br><br>
            <input type="submit" value="Enviar" tabindex="5">
        </form>
        <br>
    </body>
</html>