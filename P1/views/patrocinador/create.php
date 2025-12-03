<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Patrocinador</title>
</head>
<body>
    <h1>Inserir Patrocinador</h1>
    <form action="index.php?action=storePatrocinador" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Logotipo (URL ou caminho):</label>
        <input type="text" name="logotipo"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
