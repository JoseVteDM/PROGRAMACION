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