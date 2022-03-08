<?php

class Producto
{
    protected $fechaCaducidad;
    protected $numLote;
    protected $fechaEnvasado;
    protected $paisOrigen;

    public function __construct($fechaCaducidad, $numLote,$fechaEnvasado,$paisOrigen){
        $this->fechaCaducidad=$fechaCaducidad;
        $this->numLote=$numLote;
        $this->paisOrigen = $paisOrigen
    }

    
   
    class refrigerados extends Producto
