<?php
	
	require_once "cabecalho.php";
?>
	<div class="content">
	  <div class="container">
	  <?php
			if(isset($_GET["msg"]))
			{
				echo "<div class='alert alert-success' role='alert'>{$_GET['msg']}</div>";
			}
	 ?>
	  
		<br><br><h1 class="row justify-content-center align-items-center">Produtos</h1><br>
		<br>
		<a  class="btn btn-success" href="/lojamvc/inserirProduto">Novo produto</a>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Imagem</th>
				<th>Situação</th>
				<th>Ações</th>
			</tr>
			<?php
				
				
				foreach($retorno as $dados)
				{
					$preco = number_format($dados->preco,2,",",".");
					
					echo "<tr>
					      <td>{$dados->nome}</td>
						  <td>$preco</td>
						  <td>{$dados->estoque}</td>
						  <td>{$dados->descritivo}</td>
						  <td><img src='produtos/{$dados->imagem}' style='width: 100px; heigth: 100px;'></td>
						  <td>{$dados->situacao}</td>
						  <td>
						  
						  <a href='/lojamvc/alterar/{$dados->id_produto}' class='btn btn-warning'>Alterar</a>
						  
						  &nbsp;&nbsp;";
						  if($dados->situacao == 'Ativo')
						  {
							echo "<a href='/lojamvc/situacao/{$dados->id_produto}/Inativo' class='btn btn-danger'>Inativar</a>";
						  }
						  else
						  {
							echo "<a href='/lojamvc/situacao/{$dados->id_produto}/Ativo' class='btn btn-seccundary'>Ativar</a>";
						  }
						  
						  
						echo "</td>
						 </tr>"; 
						  
				}
				
				
			?>
		</table>
		
		
	</div>
</div>
</body>
</html>