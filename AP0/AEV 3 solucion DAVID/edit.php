<?php




require_once("funciones/Listado.php");
$lista = importar("data/tareas.csv");
$tarea = getFila($lista, isset($_GET["id"]) ? $_GET["id"] : null);

if(isset($_GET["id"])){
    modificar("data/tareas.csv", $_GET["id"]);
    $mensaje = "La tarea ".$_GET["id"]." ha sido editada";
}else{
    $mensaje = "Esta tarea ya ha sido editada";
}


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