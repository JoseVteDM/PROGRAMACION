<?php
/*Ejercicio 3.- Crea una clase para definir objetos de tipo "Rectangulo", 
como atributos debes definir "largo" y "ancho". 
A continuación añade un método que calcule la superfície, 
es decir, ancho * largo, luego crea un objeto "campo"
 a partir de esta clase, establece valores de un campo de futbol, 120 x 90 m., y muestra por consola su superficie.*/

 class Rectangulo{
    private $ancho;
    private $largo;
 

 public function __construct($ancho,$largo)//Metodo construct nunca retorna nada
 {
    $this->ancho = $ancho;
    $this->largo = $largo;
 }
 public function calculaSuperficie() {//No necesito parametros de entrada porque ya los tengo en los atributos, las 
                                    //funciones no tienen que depender de nada externo pero en este caso consideramos 
                                    //que los atributos no son nada externo.
        $resultado = $this->ancho * $this->largo;
        return $resultado;
    
 }
    /**
     * Get the value of ancho
     */ 
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set the value of ancho
     *
     * @return  self
     */ 
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get the value of largo
     */ 
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set the value of largo
     *
     * @return  self
     */ 
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }
 
}
    $campo = new Rectangulo(120,90);

    echo "La superficie del campo mide: ". $campo->calculaSuperficie();