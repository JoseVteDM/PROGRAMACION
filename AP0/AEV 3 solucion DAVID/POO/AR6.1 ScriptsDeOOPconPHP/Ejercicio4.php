<?php
/*Ejercicio 4.- Crea una clase para definir objetos de tipo "Esfera", 
como atributos debes definir "diámetro". 
A continuación añade un método que calcule el volúmen, es decir, (4/3)*pi*radio³, 
luego crea un objeto "bola" a partir de esta clase, establece un valor de diámetro obtenido por teclado, y muestra por consola su volumen.*/


class Esfera{
    private $diametro;



    public function __construct($diametro)//Metodo construct nunca retorna nada
     {
    $this->diametro = $diametro;
    
    }
    public function calculaSuperficie() {
        $resultado = (4/3)*(($this->diametro/2)**3) * 3.1416;
        return $resultado;

}


    /**
     * Get the value of diametro
     */ 
    public function getDiametro()
    {
        return $this->diametro;
    }

    /**
     * Set the value of diametro
     *
     * @return  self
     */ 
    public function setDiametro($diametro)
    {
        $this->diametro = $diametro;

        return $this;
    }
}

    $bola = new Esfera(44);

    echo "La superficie del campo mide: ". $bola->calculaSuperficie();