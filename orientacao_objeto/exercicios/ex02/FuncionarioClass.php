<?php
final class Funcionario extends Pessoa
{
    public function __construct(
        private string $carteira_profissional = "",
        string $nome
    )
    {
        parent:: __construct($nome);
    }


    //========== Métodos GET ==========

    public function getCarteiraProfissional()
    {
        return $this->carteira_profissional;
    }


    //========== Métodos SET ==========

    public function setCarteiraProfissional($carteira_profissionalFuncionario)
    {
        $this->carteira_profissional = $carteira_profissionalFuncionario;
    }
}
?>