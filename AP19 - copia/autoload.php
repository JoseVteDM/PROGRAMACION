<?php
spl_autoload_register("finder");

function finder($class)
{
    require_once "class/".$class.".php";
}