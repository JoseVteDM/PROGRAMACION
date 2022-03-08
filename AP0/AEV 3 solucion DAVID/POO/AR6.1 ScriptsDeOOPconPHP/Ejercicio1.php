<?php

/*Ejercicio 1.- Crea una clase para definir objetos de tipo "Tarea",
 como atributos debes definir "título", "descripción" y "fecha". 
 A continuación, crea un objeto a partir de esta clase y muestralo por consola.*/

class Tarea{
    private $titulo;
    private $descripcion;
    private $fecha;

    public function __construct($titulo,$descripcion,$fecha)
    {
        $this->titulo = $titulo;
        $this-> descripcion = $descripcion;
        $this->fecha = $fecha;
       
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    }
    
    $tarea1 = new Tarea("Hacer la compra","comprar tortilla de patatas y toallitaS ","14/01/20228");

    echo "La tarea". $tarea1->getTitulo()."consistente en : ". $tarea1->getDescripcion()."tiene que realizarse antes del". $tarea1->getFecha();


