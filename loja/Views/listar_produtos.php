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
        <a class="btn btn-success" href="/loja/inserir_produto">Novo produto</a><br><br>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
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
						  <td>
						  
						  <a href='edit_produto.php?idproduto={$dados->id_produto}' class='btn btn-warning'>Alterar</a>
						  
						  &nbsp;&nbsp;
						  
						  <a href='/loja/excluir_produto?id={$dados->id_produto}' class='btn btn-danger'>Excluir</a>
						  
						  </td>
						 </tr>"; 
						  
				}
				
				
			?>
		</table>		
	</div>
</div>
</body>
</html>