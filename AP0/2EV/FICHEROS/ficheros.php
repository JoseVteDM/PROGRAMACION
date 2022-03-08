<?php

$fp = fopen("datos.txt","r");
while(!feof($)){

    $linea = fgets($fp);
    echo $linea."<br>";
}

?>