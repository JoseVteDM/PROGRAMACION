<?php
require_once "autoload.php";

$refrigerado = new Refrigerados("R1",-5,"10/10/2022",123456,"10/10/2021","Portugal");
var_dump($refrigerado);

$congelado = new Congelados(-15,"11/05/2022",123456,"11/12/2021","Senegal");
var_dump($congelado);

$fresco = new Frescos("01/06/2022",123456,"11/12/2019","España");
var_dump($fresco);