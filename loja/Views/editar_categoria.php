<?php
	require_once "cabecalho.php";
?>
<div class="content">
	<div class="container">
	<br>
		<h1>Categoria</h1>
	<br>
		<form action="#" method="POST">
		
			<input type="hidden" name="id_categoria" value="<?php echo $retorno[0]->id_categoria; ?>">
			
			<label for="descritivo">Descritivo:</label>
			<input type="text" name="descritivo" id="descritivo" value="<?php echo $retorno[0]->descritivo;?>">
			<div style="color:red;font-size:12px;"><?php echo $erro; ?></div>
			<br><br>
			<input type="submit" value="Alterar">
		</form>
	</div>
    </div>
</body>
</html>