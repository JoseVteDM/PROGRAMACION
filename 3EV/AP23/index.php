<?php

//*Ejercicio 1.- descarga el fichero "jardineria.sql" e importalo a tu servidor MySql. 
//Crea el código necesario para conectar con la base de datos.
$con = new PDO('mysql:host=localhost;port=3306;dbname=jardineria', "root", "");//Aqui llamamos a php myAdmin y conecta conla BBDD


//Aqui pudanios usarl la sintaxis sql
$rowCount =$con->query("SELECT COUNT(*) AS cuantos FROM productos");//Aqui pudanios usarl la sintaxis sql

echo $rowCount->fetch()["cuantos"]."<br>";

$result =$con->query("SELECT CodigoProducto AS Producto, Nombre FROM productos");//Aqui pudanios usarl la sintaxis sql

while($row = $result->fetch()){//Esto nos pinta las lineas con el nombre del producto con producto delante
    echo "Producto: ". $row["Producto"] . "-  ";
    echo "Nombre ". $row["Nombre"] . "<br>";
}



