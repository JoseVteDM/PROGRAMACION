<?php

echo "Hello world " ;
echo "Hello world " ;
echo "Hello world " ;
echo "Hello world </br>" ;
$x = 19;
$y = 23;

$resultado = $x + $y ;
$resultado2 = $x - $y;

echo $resultado ;
echo $resultado2;

?>

<br>

<?php
echo "otra vez...";

$nota1 = 2;
$nota2 = 1;
$nota3 = 9;
$nota4 = 8;
$numeroAsignaturas = 4;

/*$pseudoresultado = $nota1 + $nota2 + $nota3 + $nota4;
$resultado = $pseudoresultado / $numeroAsignaturas;*/

$resultado = $nota1 + $nota2 + $nota3 +$nota4;
$resultado /= 4;

/*echo "El resultado es:" .$resultado;*/
//echo "El resultado es: $resultado"
echo 'Empecé con un $nota1, y acabé con el resultado de: $resultado';

?>