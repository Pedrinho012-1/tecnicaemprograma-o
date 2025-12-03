<?php
require_once "./UsuarioClass.php";
require_once "./CelularClass.php";

$usuario1 = new Usuario("Bruno Righi", "111.111.111-11", "bruno@gmail.com", /* DDD */ 14, /* NUMERO */ "999999999");
$usuario1->setCelular(14, "777777777"); // Adicionando um segundo número pro usuario1

echo "<pre>";
var_dump($usuario1);
echo "</pre>";
?>