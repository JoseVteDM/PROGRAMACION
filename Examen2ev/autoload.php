<?php

function autoloading($className){
    $file = "Clases2EV/".$className.".php";
    if(file_exists($file)){
        require_once $file;
    }else{
        die("La clase $className no se encuentra.");
    }
}


spl_autoload_register("autoloading");