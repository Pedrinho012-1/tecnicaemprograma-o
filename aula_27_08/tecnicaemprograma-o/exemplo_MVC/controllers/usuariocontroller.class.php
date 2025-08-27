<?php
 require_once "models/usuariocontroller.class.php";
   class UsuarioController
   {
    public function login()
      {
       //require vies formulário
       if($_POST)
        {
          //verificar os dados
          //verificar no banco de dados se existe esse usuário
        }
      }//fim do login
      public function inserir()
      {
         $msg = array("","","","");
         $erro = false;
        if($_POST)
        {
         if (empty($_post["nome"]))
          {
              $msg[0] = "Preencha o nome";
                 $erro = true;
           }
        }

        if (empty($_post["email"]))
        {
             $msg[1] = "Preencha o email";
              $erro = true;
        }
        else
        {
           //verificar se ja no tem um usuario com esse email
           $usuario =new Usuarios(email:$_post["email"]);
        }
        if (empty($_post["nome"]))
        {
             $msg[2] = "Preencha a senha";
              $erro = true;
        }

        if (empty($_post["celular"]))
        {
             $msg[3] = "Preencha o celular";
              $erro = true;
        }

        if($erro)
        {
            $usuario = new usuarios(0, $_post ["nome"], $_post["email"],$_post["senha"],$_post["celular"]);
        }
       require_once "views/form_usuario.php";
      }
   }//fim da classe
?>