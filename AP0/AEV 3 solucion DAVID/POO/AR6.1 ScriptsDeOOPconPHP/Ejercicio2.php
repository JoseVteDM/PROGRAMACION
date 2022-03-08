<?php

/*Ejercicio 2.- Crea una clase para definir objetos de tipo "Fruta", 
como atributos debes definir "color", "forma" y "sabor".
 A continuación, crea un objeto a partir de esta clase, establece valores para cada atributo y muestralo por consola.*/
 
class Fruta{
    private $color;
    private $forma;
    private $sabor;

    public function __construct($color,$forma,$sabor)
    {
        $this->color = $color;
        $this->forma = $forma;
        $this->sabor = $sabor;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of forma
     */ 
    public function getForma()
    {
        return $this->forma;
    }

    /**
     * Set the value of forma
     *
     * @return  self
     */ 
    public function setForma($forma)
    {
        $this->forma = $forma;

        return $this;
    }

    /**
     * Get the value of sabor
     */ 
    public function getSabor()
    {
        return $this->sabor;
    }

    /**
     * Set the value of sabor
     *
     * @return  self
     */ 
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;

        return $this;
    }
    }

    $fruta1 = new Fruta("Amarilla","ovalada","acido");

    echo "La fruta". $fruta1->getColor()."de forma". $fruta1->getForma()."tiene sabor". $fruta1->getSabor();