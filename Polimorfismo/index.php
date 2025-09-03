<?php
    require_once "conta.class.php";
    require_once "poupanca.class.php";
    require_once "corrente.class.php";

  $corrente = new Corrente(1000, "123-4" , "234-5", "5000");

  echo  <"br">;
  echo $corrente->getsaldo ();

  $corrente->retirar(500);
   
  echo <"br">;
  echo $corrente->getsaldo ();

  $poupanca = new poupanca(4, "234-5", "987-6", 10000);

echo <"br">;
  echo $poupanca->getsaldo ();

  $poupanca->retirar(500);
 echo <"br">;
  echo $poupanca->getsaldo ();
