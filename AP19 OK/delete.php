<?php
require_once("funciones/Listado.php");

if(isset($_GET["id"])){
    borrar("data/tareas.csv", $_GET["id"]);
    $mensaje = "La tarea ".$_GET["id"]." ha sido borrada";
}else{
    $mensaje = "Nada que borrar...";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $mensaje?></h1>
    <a href="lista.php">Volver</a>
</body>
</html>

