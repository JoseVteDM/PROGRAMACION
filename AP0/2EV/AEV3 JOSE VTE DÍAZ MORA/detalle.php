<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    



    <?php

/**Ejercicio 4.- Modifica el ejercicio anterior de forma que:

-El título sea un enlace a una página llamada "detalle.php". Esta página mostrará toda la información de la tarea,
 e incluirá un enlace para volver a la página de listado.

-El enlace debe incluir el envio por GET del id de la tarea. Este id debe servir para seleccionar la tarea.

-Modifica el código para añadir una función getTarea(), a la que podremos pasar un identificador, y nos devolverá el array
 asociativo de esta tarea.

-La fila devuelta debe tener los dos campos de fecha en formato DD/MM/YYY */



    $id = $_GET["id"];
    $tarea = getTarea($id);
    

function importar(){
  $fp = fopen("tareas.csv","r");
  $arrayMadre = [];
  $contador = 0;
  $linea = fgetcsv($fp,0,",");//El 0 es porque ese parametro que te da la función lo queremos en 0 ya que la funcion tiene el comportamiento ese
  while($linea !== false){
          $timestampCreacion = strtotime($linea[3]);
          $fechaCreacion = date("d-m-Y", $timestampCreacion);
          $timestampVencimiento = strtotime($linea[4]);
          $fechaVencimiento = date("d-m-Y", $timestampVencimiento);
          $arrayHijo = [];
          $arrayHijo["id"] = $linea[0];
          $arrayHijo["titulo"] = $linea[1];
          $arrayHijo["detalle"] = $linea[2];
          $arrayHijo["fechaCreacion"] = $fechaCreacion;
          $arrayHijo["fechaVencimiento"] = $fechaVencimiento;

          $linea = fgetcsv($fp,0,",");////Aqui volvemos a hacer el fgetcsv porque si no pinta el array hijo, nos da un error en la 86
          $arrayMadre[$contador] = $arrayHijo;
          $contador++;

      }
      return $arrayMadre;
  }



function getTarea($id){
    $arrayMadre = importar();
    
    $arrayHijo = $arrayMadre[(Intval($id)-1)];
    //var_dump($arrayHijo);
    return $arrayHijo;

}
//IMPORTANTE PONER EL ECHO
echo "<table class=\"greenTable\">". //Las contrabarras son para acceder a la clase en este caso green table
        "<thead>".
            "<tr>".
                "<th>".$tarea["titulo"]."</th>".
            "</tr>
        </thead>
        <tfoot>
            <tr>
                <td>La tarea". $id." vence en: ". $tarea["fechaVencimiento"]."</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>fecha de creación:".$tarea["fechaCreacion"]."</td>
            </tr>
            <tr>
                <td>descripción:" .$tarea["detalle"]."</td>
            </tr>
        </tbody>
    </table>
    <a href=\"lista.php\">Volver</a>
</body>

</html>"




?>
