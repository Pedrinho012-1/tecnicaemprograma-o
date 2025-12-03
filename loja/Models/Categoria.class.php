<?php
class Categoria
{
    public function __construct(
        private int $id_categoria = 0,
        private string $descritivo = ""
    ){}


    // ========== GETs ==========
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function getDescritivo()
    {
        return $this->descritivo;
    }


    // ========== SETs ==========
    public function setDescritivo($descritivoCategoria)
    {
        $this->descritivo = $descritivoCategoria;
    }
}
?>