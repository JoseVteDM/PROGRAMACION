<?php

class Frescos
{
    protected $fechaCaducidad;
    protected $numLote;

    public function __construct($fechaCaducidad, $numLote){
        $this->fechaCaducidad=$fechaCaducidad;
        $this->numLote=$numLote;
    }

    
   
    class refrigerados extends Producto
