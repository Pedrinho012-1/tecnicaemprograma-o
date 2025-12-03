<?php
final class Tecnico extends Pessoa
{
    public function __construct(
        private string $especialidade = "",
        private array $aparelho = array(),
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

    public function getAparelho()
    {
        return $this->aparelho;
    }


    //========== Métodos SET ==========

    public function setEspecialidade($especialidadeTecnico)
    {
        $this->especialidade = $especialidadeTecnico;
    }

    public function setAparelho(Aparelho $aparelhoTecnico)
    {
        $this->aparelho[] = $aparelhoTecnico;
    }
}
?>