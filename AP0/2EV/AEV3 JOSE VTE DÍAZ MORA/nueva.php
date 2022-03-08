<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <h1>Nueva tarea</h1>
    <?php 
function insert(){ 


    if(count($datos)>0){
    /*$linea =  $datos["id"]."\'".
              "\'".$datos["titulo"]."\'".
              "\'".$datos["detalle"]."\'".
              $datos["fechaCreacion"]."\'".
              $datos["fechaVencimiento"];

    
*/

        $linea = [
            $datos["id"]."\'".
              "\'".$datos["titulo"]."\'".
              "\'".$datos["detalle"]."\'".
              $datos["fechaCreacion"]."\'".
              $datos["fechaVencimiento"];


        ];
        $fp = fopen("tareas.csv", "a");
        //fwrite($fp,"\n$linea");
        fputcsv($fp,$linea);
        fclose($fp);
    }

}
insert($_POST);
    ?>

        <label for="id">Identificador:</label><br>
        <input type="number" value="" name="id"><br><br>

        <label for="title">Título para la tarea:</label><br>
        <input type="text" value="" name="titulo"><br><br>

        <label for="description">Descripción:</label><br>
        <textarea rows="10" cols="50" value="" name="detalle"></textarea><br><br>

        <label for="create">Fecha de creación:</label><br>
        <input type="date" value="" name="fechaCreacion"><br><br>

        <label for="due">Fecha de vencimiento:</label><br>
        <input type="date" value="" name="fechaVencimiento"><br><br>

        <input type="submit" value="Enviar">
    </form>
    

    
</body>
</html>