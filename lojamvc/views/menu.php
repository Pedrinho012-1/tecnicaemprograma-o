<?php
	require_once "cabecalho.php";
?>
	<div class="content">
		 <div class="container" id="container">
			<div id="produtos">
				<?php
					if(isset($_GET["msg"]))
						echo "<h3>{$_GET["msg"]}</h3>";
					
					foreach($produtos as $produto)
					{
						$preco = number_format($produto->preco, 2, ",", ".");
						echo "<div class='card' style='width: 18rem;'>
					    <img src='produtos/{$produto->imagem}' class='card-img-top' alt='{$produto->nome}'>
					    <div class='card-body'>
						<h5 class='card-title'>{$produto->nome} - R$ $preco</h5>
						<a href='/lojamvc/inserir_carrinho?id={$produto->id_produto}' class='btn btn-primary'>Comprar</a>
					    </div>
					    </div>";
					}
				?>
			</div>
		 </div>
   </div>
  	
</body>
</html>