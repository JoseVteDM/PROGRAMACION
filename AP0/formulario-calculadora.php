<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     

     $Num1 = "";
     $Num2 = "";
     $Operador = "";

    if (count($_POST) > 0){ 
     $Num1 = $_POST["Numero1"];
     $Num2 = $_POST["Numero2"];
     $Operador = $_POST["Operador"];
     $Resultado = 0;

      }

     switch($Operador){
         case "Suma":
            $Operador = $Num1 + $Num2;
         break;
         case "Resta":
            $Operador = $Num1 - $Num2;
         break;
         case "Multiplicación":
            $Operador = $Num1 * $Num2;
         break;
         case "División":
            $Operador = $Num1 * $Num2;
         break;
         default:
         echo "Te has equivocado con alguna cosa";
         break;

     }

    ?>
    <form action="" method="post">
       
        <input type = "number" name="Numero1" id =""/><br>
        <input type = "number" name = "Numero2" /><br>
        <input type="submit" /><br>
        <input type = "text" value= "Operador"><br>
        <select name = "Operador" >

            <option value = "+">Suma</option>
            <option value = "-">Resta</option>
            <option value = "*">Multiplicación</option>
            <option value = "/">División</option>

        </select><br>
        

    
    
    </form>
    
</body>
</html>