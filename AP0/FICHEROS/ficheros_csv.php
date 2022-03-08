<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$fp = fopen("Datos_csv.txt","r");

do{
    $linea = fgetcsv($fp,0,"|");//El 0 es porque ese parametro que te da la función lo queremos en 0 ya que la funcion tiene el comportamiento ese
    if($linea !== false){
        // echo $linea . "<br>";
        echo "<strong>". $linea[0]."</strong> -";
        echo "<em>". $linea[1]."</em><br>";
    }

    
}while ($linea !== false);


    
   


?>
    
</body>
</html>

