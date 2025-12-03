<?php
	require_once "cabecalho.php";
?>
	<div class = "content">
		<div class = "container">
		<br>
			<h1>Categoria</h1>
			<br>
			<form action="#" method="post">
				<label for="descritivo">Descritivo:</label>
				<input type="text" name="descritivo" id="descritivo">
				<div style="color:red;font-size:12px;"><?php echo $erro;?></div>
				<br><br>
				<input type="submit" value="Cadastrar">
			</form>
		</div>
	</div>
</body>
</html>