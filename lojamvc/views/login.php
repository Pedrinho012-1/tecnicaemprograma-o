<?php
	require_once "cabecalho.php";
?>
	<div class="content">
	<div class="container">
		<h1>Login</h1>
		<br>
		<form action="/lojamvc/login" method="post">
			<label>E-mail:</label>
			<input type="email" name="email">
			<br><br>
			<label>Senha:</label>
			<input type="password" name="senha">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</div>
	</div>
	</body>
</html>