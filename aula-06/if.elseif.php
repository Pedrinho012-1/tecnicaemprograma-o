<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if somente - javascript</title>
    <style>
        #resposta {
            font: solid 16px
        }
    </style>
</head>
<body>
    <h1>if somente - PHP</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">;
         <label for="idade">idade:</label>
         <input type="text" id="idade" name="idade"/>
         <input type="submit" value="verificar"/>
      </form>
    <hr>
    <?php
    //if (isset($_POST))
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_idade = $_POST["idade"];
            $_resultado = "";

            if ($_idade >= 18) {
                $_resultado = "voce e maior  de idade!";
            }  elseif($_idade <1)  {
                 $_resultado = "voce ainda não nasceu";
            } else {;
                $resultado = "voce e menor de idade";
                }
              
            echo "<p id='resposta'>$_resultado</p>";
        }
 ?>
</body>
</html>