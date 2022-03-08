<?php
require_once("funciones/Listado.php");
if (count($_POST) > 0) update("data/tareas.csv", $_POST);

$lista = importar("data/tareas.csv");
$tarea = getFila($lista, isset($_GET["id"]) ? $_GET["id"] : null);

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
    <h1>Editar Tarea</h1>
    <form action="" method="post">

        <label for="id">Identificador:</label><br>
        <input type="number" value="<?= $tarea["id"] ?>" name="id" readonly><br><br>

        <label for="title">Título para la tarea:</label><br>
        <input type="text" value="<?= $tarea["title"] ?>" name="title"><br><br>

        <label for="description">Descripción:</label><br>
        <textarea rows="10" cols="50" name="description"><?= $tarea["description"] ?></textarea><br><br>

        <label for="create">Fecha de creación:</label><br>
        <input type="date" value="<?= toOriginDate($tarea["creationDate"]) ?>" name="creationDate"><br><br>

        <label for="due">Fecha de vencimiento:</label><br>
        <input type="date" value="<?= toOriginDate($tarea["dueDate"]) ?>" name="dueDate"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="lista.php">Volver</a>
</body>

</html>