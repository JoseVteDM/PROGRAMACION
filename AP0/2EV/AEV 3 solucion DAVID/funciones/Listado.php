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

function filas($tareas)
{
    $output = "";//Aqui inicializa  la variable porque sino el .= que sería como un += en php no me sabe sumar porque no sabe a qué sumarlo
    foreach ($tareas as $tarea) {
        $output .= "<tr>";//$output.= Es ir acumulando en la variable output
        $output .=     "<td>" . $tarea["id"] . "</td>";
        $output .=     "<td><a href='detalle.php?id=" . $tarea["id"] . "'>" . $tarea["title"] . "</a></td>";
        $output .=     "<td>" . toDate($tarea["dueDate"]) . "</td>";
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
