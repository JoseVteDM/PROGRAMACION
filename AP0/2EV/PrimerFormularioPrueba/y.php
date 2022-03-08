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
    $nombre = "";
    if(count($_POST) > 0){
        $nombre = $_POST["nombre"];
        $birth = $_POST["birth"];
        echo "hola".$nombre."naciste en $birth";
    }

    if(count($_POST) == 0){ 
?>    

<form action="" method="post">
        <label for = "nombre">Nombre:</label>
        <input type = "text" name="nombre" id ="" value="<? = $nombre ?>"><br>
        <input type = "submit" value ="Envio">
        <label for = "birth" id="">Año de nacimiento</label> 
            <?php
            for ($i=0; $i<2022; $i++){
                if($birth == $i){
                    echo "<option value = '$i' selected>$i</option>"

                }else{

                }
               echo "<option value = '$i'>$i</option>"
            }              
                 
            ?>
        
    </form>
    <?php
    }
    ?>
</body>
</html>