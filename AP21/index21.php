<?php
/*
Ejercicio 3.- Crea una clase llamada CuentaBancaria que tendrá los siguientes atributos:

titular -> será obligatorio
cantidad -> es opcional.
Crea el constructor que establezca las anteriores propiedades.

Tendrá, además, tres métodos especiales:

ingreso: que ingresa una cantidad a la cuenta, no se debe permitir el ingreso de un número negativo, se debe informar de como queda la cuenta
retirada: que retira una cantidad de la cuenta, si restando la cantidad actual a la que nos pasan es negativa, la cantidad de la cuenta
 pasa a ser 0. Se debe informar de como queda la cuenta
notifica: que recibe por parámetro los posibles mensajes que le queramos enviar al usuario, por ejemplo,
 que su cuenta ha llegado a cero
Que modificación podríamos hacer para que el constructor detectase valores iniciales negativos y que pudiese informar de con que valor 
se inicia la cuenta?*/


require_once "autoload.php";

$refrigerado = new Refrigerados("R1",-5,"10/10/2022",123456,"10/10/2021","Portugal");
var_dump($refrigerado);

$congelado = new Congelados(-15,"11/05/2022",123456,"11/12/2021","Senegal");
var_dump($congelado);

$fresco = new Frescos("01/06/2022",123456,"11/12/2019","España");
var_dump($fresco);