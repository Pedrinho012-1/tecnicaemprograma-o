<?php
class Orcamento
{
    public function __construct(
        private string $data_orcamento = "",
        private float $preco = 0.00,
        private string $data_validade = "",
        private Tecnico $tecnico = new Tecnico(),
        private Aparelho $aparelho = new Aparelho()
    ){}


    //========== Métodos GET ==========

    public function getDataOrcamento()
    {
        return $this->data_orcamento;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getDataValidade()
    {
        return $this->data_validade;
    }

    public function getTecnico()
    {
        return $this->tecnico;
    }

    public function getAparelho()
    {
        return $this->aparelho;
    }


    //========== Métodos SET ==========

    public function setDataOrcamento($data_orcamentoOrcamento)
    {
        $this->data_orcamento = $data_orcamentoOrcamento;
    }

    public function setPreco($precoOrcamento)
    {
        $this->preco = $precoOrcamento;
    }

    public function setDataValidade($data_validadeOrcamento)
    {
        $this->data_validade = $data_validadeOrcamento;
    }

    public function setTecnico($tecnicoOrcamento)
    {
        $this->tecnico = $tecnicoOrcamento;
    }

    public function setAparelho($aparelhoOrcamento)
    {
        $this->aparelho = $aparelhoOrcamento;
    }
}
?>