<?php
final class Tecnico extends Pessoa
{
    public function __construct(
        private string $especialidade = "",
        string $nome,
        int $ddd,
        string $numero
    )
    {
        parent:: __construct($nome, $ddd, $numero);
    }


    //========== Métodos GET ==========

    public function getEspecialidade()
    {
        return $this->especialidade;
    }


    //========== Métodos SET ==========

    public function setEspecialidade($especialidadeTecnico)
    {
        $this->especialidade = $especialidadeTecnico;
    }
}
?>