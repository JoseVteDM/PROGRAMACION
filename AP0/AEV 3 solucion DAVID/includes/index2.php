<?php

function autoloading($clase){
    echo $clase;

}

spl_autoload_register("autoloading")


$obj1 = new Uno ();
$obj2 = new Dos ();

