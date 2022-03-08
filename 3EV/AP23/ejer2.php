<?php
//Ejercicio 2.- Conecta y obtén el total de clientes que hay registrados en la tabla "clientes" de la base de datos "jardineria".

$rowCount =$con->query("SELECT COUNT(CodigoCliente) AS cuantos FROM Clientes");

echo $rowCount->fetch()["cuantos"]."<br>";

$result =$con->query("SELECT CodigoCliente AS Cliente, Nombre FROM Clientes");//Aqui pudanios usarl la sintaxis sql

while($row = $result->fetch()){//Esto nos pinta las lineas con el nombre del producto con producto delante
    echo "El número de clientes es: " . $row["Cliente"] . "-  ";
    
}

