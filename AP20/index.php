
<?php

/*

*/

Ejercicio 1
<?php
spl_autoload_register("finder");

function finder($class)
{
    require_once "class/".$class.".php";
}

//Esto se pone en todos los ficheros que no son son clases automaticamente llaman a lo del autoload
//que es lo de arriba y eso automticamente busca la clases
 
 function autoloading($className){
     $file = "clases"
 }

 /*
A su vez, cada tipo de producto lleva información específica



Los productos frescos deben llevar la fecha de envasado y el país de origen.
Los productos refrigerados deben llevar el código del organismo de supervisión alimentaria, la fecha de envasado, la temperatura de 
mantenimiento recomendada y el país de origen.
Los productos congelados deben llevar la fecha de envasado, el país de origen y la temperatura de mantenimiento recomendada. Además, 
existen tres tipos de productos congelados congelados por aire, congelados por agua y congelados por nitrógeno.
Los productos congelados por aire deben llevar la información de la composición del aire con que fue congelado (% de nitrógeno, % de oxígeno, 
% de dióxido de carbono y % de vapor de agua).
Los productos congelados por agua deben llevar la información de la salinidad del agua con que se realizó la congelación en gramos de sal por
 litro de agua.
Los productos congelados por nitrógeno deben llevar la información del método de congelación empleado y del tiempo de exposición al nitrógeno
 expresada en segundos.*/

 ?>