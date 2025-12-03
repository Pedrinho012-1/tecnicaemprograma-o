<?php
abstract class Conexao
{
    protected $db = null;

    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "loja";

        $parametros = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";

        try
        {
            $this->db = new PDO($parametros, $user, $password);
        }
        catch(PDOException $e)
        {
            die("Problema com conexão do banco de dados");
            echo $e->getCode();
            echo $e->getMessage();
        }
    }
}
?>