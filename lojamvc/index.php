<?php
	require_once "rotas.php";

	spl_autoload_register(function($class){
    foreach (['Controllers', 'Models'] as $pasta) {
        $arquivo = "$pasta/{$class}.class.php";
        if (file_exists($arquivo)) {
            require_once $arquivo;
            return;
        }
    }
    die("Classe não encontrada: $class");
});

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$uri = rtrim($uri, '/');
$uri = $uri === '' ? '/' : $uri;

//chama o método estático da classe Rotas
Rotas::executar($_SERVER['REQUEST_METHOD'], $uri);
?>