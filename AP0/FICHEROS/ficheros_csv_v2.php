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

while(($linea = fgetcsv($fp,0,"|")) !== false) {
    echo "<strong>". $linea[0]."</strong> -";
    echo "<em>". $linea[1]."</em><br>";
    }
    fclose($fp);
?>
    
</body>
</html>

