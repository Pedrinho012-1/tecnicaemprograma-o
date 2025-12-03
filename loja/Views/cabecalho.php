<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"/>
    <title>SkynkLoja</title>
</head>
<body class="bg-dark text-white">
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">SynkLoja</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=HomeController&metodo=inicio">Home</a>
                    </li>
                    <?php
                    if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] === "Administrador")
                    {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controle=CategoriaController&metodo=listar">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controle=ProdutoController&metodo=listar">Produto</a>
                        </li>
                        ';
                    }
                    if(isset($_SESSION['nome']))
                    {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controle=UsuarioController&metodo=logout">Sair</a>
                        </li>
                        ';
                    }
                    else
                    {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controle=UsuarioController&metodo=login">Entrar</a>
                        </li>
                        ';
                    }
                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>