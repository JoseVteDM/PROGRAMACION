<?php
function importar($fichero)
{
    $tareas = [];
    $gestor = fopen($fichero, "r");
    while (($datos = fgetcsv($gestor)) !== false) {
        $fila = [
            "id" => $datos[0],
            "title" => $datos[1],
            "description" => $datos[2],
            "creationDate" => strtotime($datos[3]),
            "dueDate" => strtotime($datos[4])
        ];
        array_push($tareas, $fila);
    }
    fclose($gestor);
    return $tareas;
}

function insert($fichero, $datos)
{

    $id = $datos["id"];
    $title = $datos["title"];
    $description = $datos["description"];
    $create = $datos["creationDate"];
    $due = $datos["dueDate"];

    $newTask = [$id, $title, $description, $due, $create];

    $gestor = fopen($fichero, "a");
    fputcsv($gestor, $newTask);
    fclose($gestor);
}

function update($fichero,$datos){
    $id = $datos["id"];
    $title = $datos["title"];
    $description = $datos["description"];
    $create = $datos["creationDate"];
    $due = $datos["dueDate"];

    $newTarea = [$id, $title, $description, $due, $create];
    $tareas = importar($fichero);
    $gestor = fopen($fichero, "w");
    foreach ($tareas as $tarea) {
        if ($tarea["id"] == $id) {
            $tarea["creationDate"] = toOriginDate($tarea["creationDate"]);
            $tarea["dueDate"] = toOriginDate($tarea["dueDate"]);
            fputcsv($gestor, $tarea);
        }
    }
    fclose($gestor);
    return true;
    
}

function borrar($fichero, $id)
{
    $tareas = importar($fichero);
    $gestor = fopen($fichero, "w");
    foreach ($tareas as $tarea) {
        if ($tarea["id"] != $id) {
            $tarea["creationDate"] = toOriginDate($tarea["creationDate"]);
            $tarea["dueDate"] = toOriginDate($tarea["dueDate"]);
            fputcsv($gestor, $tarea);
        }
    }
    fclose($gestor);
    return true;
}

function filas($tareas)
{
    $output = "";
    foreach ($tareas as $tarea) {
        $output .= "<tr>";
        $output .=     "<td>" . $tarea["id"] . "</td>";
        $output .=     "<td><a href='detalle.php?id=" . $tarea["id"] . "'>" . $tarea["title"] . "</a></td>";
        $output .=     "<td>" . toDate($tarea["dueDate"]) . "</td>";
        $output .=     "<td><a href='delete.php?id=" . $tarea["id"] . "'><img src='img/del_icon.png' width='25'></a></td>";
        $output .=     "<td><a href='delete.php?id=" . $tarea["id"] . "'><img src='img/lapiz.png' width='25'></a></td>";
        $output .= "</tr>";
    }
    return $output;
}

function getFila($tareas, $id)
{
    foreach ($tareas as $tarea) {
        if ($tarea["id"] == $id)
            return [
                "id" => $tarea["id"],
                "title" => $tarea["title"],
                "description" => $tarea["description"],
                "creationDate" => toDate($tarea["creationDate"]),
                "dueDate" => toDate($tarea["dueDate"])
            ];
    }
    return [
        "id" => null,
        "title" => null,
        "description" => null,
        "creationDate" => null,
        "dueDate" => null
    ];
}

function toDate($date)
{
    return date("d/m/Y", $date);
}

function toOriginDate($date)
{
    return date("Y-m-d", $date);
}
