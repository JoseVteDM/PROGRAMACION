<?php

/*Ejercicio 3.- Crea una clase llamada CuentaBancaria que tendrá los siguientes atributos:

titular -> será obligatorio
cantidad -> es opcional.
Crea el constructor que establezca las anteriores propiedades.

Tendrá, además, tres métodos especiales:

ingreso: que ingresa una cantidad a la cuenta, no se debe permitir el ingreso de un número negativo, se debe informar de como queda la cuenta
retirada: que retira una cantidad de la cuenta, si restando la cantidad actual a la que nos pasan es negativa, la cantidad de la cuenta 
pasa a ser 0. Se debe informar de como queda la cuenta

notifica: que recibe por parámetro los posibles mensajes que le queramos enviar al usuario, por ejemplo, que su cuenta ha llegado a cero
Que modificación podríamos hacer para que el constructor detectase valores iniciales negativos y que pudiese informar de con que valor se 
inicia la cuenta?

Crea instancias de la clase para demostrar el buen funcionamiento del código. */


class CuentaBancaria ({
    protected $titular;
    protected $cantidad;

    public function __construct($titular, $cantidad =0)//Cantidad = 0 porque es obligatorio
    {
        $this->titular = $titular;
        $this->cantidad = $cantidD;
        
    
    }


    public function Ingreso($ingreso){

        if($ingreso > 0){
            $this->cantidad = $this->cantidad + $ingreso
        }else{
            return $this->cantidad
        }
    }
    public function retirada($retirada){

        if($ingreso > 0){
            $this->cantidad = $this->cantidad + $ingreso
        }else{
            
        }
    }


}

$objeto = new CuentaBancaria("Pepe",)
echo $objeto->ingreso(500);

?>