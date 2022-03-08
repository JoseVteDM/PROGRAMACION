<?php


/*Ejercicio 6.- Conecta y obtén el total de clientes que hay registrados en la tabla "clientes" 
de la base de datos "jardineria" 
cuyo límite de crédito es mayor al parámetro pasado por URL llamado "limite".*/

$con = new PDO('mysql:host=localhost;port=3306;dbname=jardineria', "root", "");

$limite = $_GET["limite"];

$sql = "SELECT COUNT(*) AS cuantos FROM Clientes WHERE LimiteCredito >". $limite ;
//echo  $sql;

$result =$con->query($sql);

echo "clientes con mayor crédito que $limite.'$'. :".$result->fetch()['cuantos'];


   