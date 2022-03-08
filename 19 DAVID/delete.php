<?php

require_once "autoload.php";

$cartera = new Cartera("data.csv");

$cartera->delete(isset($_GET['id']) ? $_GET['id'] : null);

header("location: list.php");//Esto es lo del header que sale en en el edit