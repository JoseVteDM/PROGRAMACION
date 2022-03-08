<?php
require_once("funciones/Listado.php");
$lista = importar("data/tareas.csv");
$tarea = getFila($lista, isset($_GET["id"]) ? $_GET["id"] : null);//Si no está establecido le damos el  valor null que lo podemos llevar a una página de error
                                                                //? es el true : es el false
/*if (isset($_GET["id"])){
    isset($_GET["id"];
}else{
    $id = null
} ESTE IF ELSE ES LO MISMO QUE LA LINEA 4  
    
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <table class="greenTable">
        <thead>
            <tr>
                <th><?= $tarea["title"] ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>La tarea <?= $tarea["id"] ?> vence en <?= $tarea["dueDate"] ?></td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>fecha de creación: <?= $tarea["creationDate"] ?></td>
            </tr>
            <tr>
                <td>descripción: <?= $tarea["description"] ?></td>
            </tr>
        </tbody>
    </table>
    <a href="lista.php">Volver</a>
</body>

</html>