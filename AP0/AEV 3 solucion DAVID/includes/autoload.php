<?php
function autoloading($className){
    require_once "clases/".$className.".php";
}

spl_autoload_register("autoloading");