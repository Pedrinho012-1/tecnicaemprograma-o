<?php
	if(!isset($_SESSION))
	{
		session_start();
		//var_dump($_SESSION);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Loja</title>
		<meta charset="UTF-8">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
    <a class="navbar-brand" href="#">Loja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/lojamvc">Home</a>
        </li>
        
        <?php 
			if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "Administrador")
			{
				
		echo "<li class='nav-item'>
				  <a class='nav-link' href='/lojamvc/listar'>Categoria</a>
			  </li>
			  <li class='nav-item'>
					<a class='nav-link' href='/lojamvc/listarProduto'>Produto</a>
			  </li>";
			}
			if(isset($_SESSION["nome"]))
			{
				echo "<li class='nav-item'>
				<a  class='nav-link' href='/lojamvc/logout'>Sair</a>
				</li>";
			}
			else
			{
				echo "<li class='nav-item'>
						<a  class='nav-link' href='/lojamvc/login'>Entrar</a>
					  </li>";
			}
       ?> 
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>