<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <table class="greenTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>título</th>
                <th>Vencimiento</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">&nbsp;</td>
            </tr>
        </tfoot>
        <tbody>
            <?php
/*Ejercicio 1.- A partir de los ficheros tareas.csv, lista.html y estilos.css, combínalos para listar en la tabla 
el contenido del fichero csv, considerando solo los campos ID, titulo y fecha de vencimiento. Crea una función para ello, 
de forma que se genere y devuelva el código HTML referente a la tabla desde ésta, para dejar la menor huella de php en el código HTML.

Haz que la fecha se muestre en formato DD/MM/YYY. Investiga como se puede convertir un string a 'timestamp', y como un timestamp
 puede ser formateado a voluntad. */



 //ejercicio1();

function ejercicio1(){
  $fp = fopen("tareas.csv","r");

do{
    $linea = fgetcsv($fp,0,",");//El 0 es porque ese parametro que te da la función lo queremos en 0 ya que la funcion tiene el comportamiento ese
    if($linea !== false){
        $timestamp = strtotime($linea[4]);
        $fecha = date("d-m-Y", $timestamp);
        // echo $linea . "<br>";
        echo "<tr>
        <td>".$linea[0]."</td>".
        "<td><a href=detalle.php?id=".$linea[0]."</a>".$linea[2]."</td>".//
        "<td>".$fecha."</td>
      </tr>";
        
    }

    
}while ($linea !== false); 

}

 


/*Ejercicio 2.- Modifica el ejercicio anterior y define dos funciones:

importar() cuya misión será crear un array bidimensional y asociativo con el contenido del fichero csv. Guarda las fechas en formato 
timestamp dentro del array

filas() cuya misión será la misma que la de la función en el ejercicio anterior, es decir, mostrar las filas
En este caso estamos separando en dos la función del ejercicio anterior, por lo que se muestra la información de la 
misma forma que en el ejercicio anterior. */


//importar();

function importar(){
  $fp = fopen("tareas.csv","r");//"r" porque es sólo lectura
  $arrayMadre = [];
  $contador = 0;
  $linea = fgetcsv($fp,0,",");//El 0 es porque ese parametro que te da la función lo queremos en 0 ya que la funcion tiene el comportamiento ese
  while($linea !== false){
          $timestampCreacion = strtotime($linea[3]);// strtotime Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
          $fechaCreacion = date("d-m-Y", $timestampCreacion);//date da formato a la fecha el primer parámetro que he elegido nos dice dia mes año "d-m-Y" y el siguiente de que fecha Unix
          $timestampVencimiento = strtotime($linea[4]);
          $fechaVencimiento = date("d-m-Y", $timestampVencimiento);

          //$fechaVencimiento = toDate($linea[3]);
          //$fechaCreacion = toDate($linea[4]);
          $arrayHijo = [];
          $arrayHijo["id"] = $linea[0];
          $arrayHijo["titulo"] = $linea[1];
          $arrayHijo["detalle"] = $linea[2];
          $arrayHijo["fechaCreacion"] = $fechaCreacion;
          $arrayHijo["fechaVencimiento"] = $fechaVencimiento;

          $linea = fgetcsv($fp,0,",");//Aqui volvemos a hacer el fgetcsv porque si no pinta el array hijo, nos da un error en la 86
          $arrayMadre[$contador] = $arrayHijo;
          $contador++;
      }
      fclose($fp);
      return $arrayMadre;
  }


  filas();

  function filas(){
    foreach(importar() as $fila ){
      echo "<tr>
      <td>".$fila["id"]."</td>".
      "<td><a href=detalle.php?id=".$fila["id"]."</a>".$fila["titulo"]."</td>".//
      "<td>".$fila["fechaVencimiento"]."</td>
    </tr>";
    //Truco para hacer el html phposo este es geberar la vaina html con los huecos y luego ya ponemos $fila["whatever"]
    // NO hace falta return porque el echo esta dentro de la funcion
  }
}


/**Ejercicio 3.- Desplaza la definición de las funciones a una zona del código "fuera" del código HTML
 * ESTE YA ESTÄ HECHO PORQUE LAS FUNCIONES YA ESTÄN ABAJO
 */



/*Ejercicio 5.- Dado que las funciones filas() y getTarea() deben formatear (DAR FORMATO, no borrar) los campos de fecha, 
sería deseable que creáramos una función. Para ello, crea la función toDate() que realice esta acción.*/


function toDate($fecha){
  return date("d-m-Y",strtotime($fecha));
}



/*
PRUEBA 2
toDate($arrayMadre);



function toDate($arrayMadre){
  for($i=0; $i < count($arrayMadre); $i++){
    $arrayMadre[$i]["fechaCreacion"] = date("d/m/Y",strtotime($arrayMadre[$i]["fechaCreacion"]));
    $arrayMadre[$i]["fechaVencimiento"] = date("d/m/Y",strtotime($arrayMadre[$i]["fechaVencimiento"]));

    echo "<tr>
        <td>".$arrayMadre[$i]["fechaCreacion"]."</td>".
        "<td>".$arrayMadre[$i]["fechaVencimiento"]."</td>
        
      </tr>";
  }
}

*/
/*PRUEBA 1
toDate($fechaVencimiento,$fechaCreacion);

function toDate($fechaVencimiento,$fechaCreacion){
          $fp = fopen("tareas.csv","r");
          $linea = fgetcsv($fp,0,",");
          //$arrayFechas = [];
          $timestampCreacion = strtotime($linea[3]);// strtotime Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
          $fechaCreacion = date("d-m-Y", $timestampCreacion);//date da formato a la fecha el primer parámetro que he elegido nos dice dia mes año "d-m-Y" y el siguiente de que fecha Unix
          $timestampVencimiento = strtotime($linea[4]);
          $fechaVencimiento = date("d-m-Y", $timestampVencimiento);
    while($linea !== false){
      
      echo "<tr>
        <td>".$fechaCreacion."</td>".
        "<td>".$fechaVencimiento."</td>
        
      </tr>";
    }
          

//return toDate($fechaVencimiento,$fechaCreacion);
};*/