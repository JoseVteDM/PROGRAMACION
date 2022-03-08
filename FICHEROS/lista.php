<?php
require_once("funciones/Listado.php");
$lista = importar("data/tareas.csv");

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
                <th>ID</th>
                <th>título</th>
                <th>Vencimiento</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">
                    &nbsp;
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= filas($lista) ?>
        </tbody>
    </table>

</body>

</html>