<?php
    class Poupanca extends conta 

   {
    public function __construct(private int $aniversario = 0, string $numero = "", string $agencia = "", float $saldo = 0)
    
    {
        parent::__construct($numero, $agencia, $saldo);
    }

    public function retirar($valor){
        
        $diaCorrente = (int)date("d"); 

        if($this->anivesario > $diacorrente)
        {    
             echo "Voce perdera os rendimentos";
        } 

        if ($this->saldo >= $valor)
        {
            parent:: retirar($valor);
        }
        else
        
        {
            echo "Poupanca sem saldo para a retirada";
        } 
     }
   }
?>