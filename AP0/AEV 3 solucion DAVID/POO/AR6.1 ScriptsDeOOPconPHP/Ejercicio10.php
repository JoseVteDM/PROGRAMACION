<?php
/*Ejercicio 10.- Crea las siguientes clases:

Hosteleria: con atributos mesas, camareros, cocineros y precioMenu
Bar: hereda de Hosteleria. Atributo metrosBarra.
Restaurante: hereda de Hosteleria. Atributo estrellasMichelin.
Burguer:  hereda de Hosteleria. Atributo servicioDomicilio.
Todos los atributos son numéricos, excepto ServicioDomicilio que es booleano.

Un método servidioCliente devuelve "malo" o "bueno" en función de si el número de mesas es
 superior al de camareros o no. Esto es cierto para el bar y el restaurante, pero no para el burguer,
  donde para saber si el servicio es bueno o malo, se compara el número de cocineros con el de mesas/3

Crea tres objetos: establecimiento1, de tipo Bar, establecimiento2, de tipo Restaurante y establecimiento3, 
de tipo Burguer, con los siguientes datos:

Bar: 10 mesas, 10 camareros, 5 cocineros, 12€/Menú, 7 metros de barra
Restaurante: 10 mesas, 5 camareros, 3 cocineros, 25€/Menú, 1 estrella Michelin
Burguer: 15 mesas, 0 camareros, 6 cocineros, 7€/Menú, No tiene servicio domicilio
Muestra, para cada establecimiento, si su atención al cliente es buena o mala.*/
class Hosteleria{
    protected $mesas;
    protected $camareros;
    protected $cocineros;
    protected $precioMenu;

    public function __construct($mesa,$camareros,$cocineros,$precioMenu){
        $this->setMesas($mesas);
        $this->setCamareros($camareros);
        $this->setCocineros($cocineros);
        $this->setPrecioMenu($precioMenu);
    }

class Bar extends Hosteleria{
    private $metrosBarra;

    public function __construct($mesa,$camareros,$cocineros,$precioMenu,$metrosBarra){
        parent::__construct($mesa,$camareros,$cocineros,$precioMenu);
        $this->metrosBarra = $metrosBarra;
    }
    public function  setMetrosBarra($metrosBarra){
        if(is_nan($metrosBarra)){
            $this->metrosBarra= null;
        }else{
            $this->metrosBarra= $metrosBarra;
        }
    }
}
class Restaurante extends Hosteleria{
    private $estrellasMichelin;

    public function __construct($mesa,$camareros,$cocineros,$precioMenu,$estrellasMichelin){
        parent::__construct($mesa,$camareros,$cocineros,$estrellasMichelin);
        $this->estrellasMichelin = $estrellasMichelin;
    }
    public function  setEstrellasMichelin($estrellasMichelin){
        if(is_nan($estrellasMichelin)){
            $this->estrellasMichelin= null;
        }else{
            $this->estrellasMichelin= $estrellasMichelin;
        }
    }
}
class Burguer extends Hosteleria{
    private $servicioDomicilio;

    public function __construct($mesa,$camareros,$cocineros,$precioMenu,$servicioDomicilio){
        parent::__construct($mesa,$camareros,$cocineros,$servicioDomicilio);
        $this->servicioDomicilio = $servicioDomicilio;
    }
    public function  setServicioDomicilio($servicioDomicilio){
        if($servicioDomicilio==$true){
            $this->servicioDomicilio= true;
        }else{
        }
    }
    $this->servicioDomicilio= $servicioDomicilio;
    
    
}
