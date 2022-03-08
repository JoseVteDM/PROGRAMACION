<?php

/*Ejercicio 7.- Crea una clase para definir objetos de tipo "Deposito",
 como atributos debes definir "liquido" y "litros". 
A continuación añade un método que nos permita vaciar el depósito tanto como le indiquemos a éste,
 luego crea un objeto "depositoMunicipal" a partir de esta clase,
 establece valores teniendo en cuenta que lo llenaremos con 100.000 litros de agua, 
 retira 5.000 litros y muestra por consola sel objeto.*/


 class Deposito{
    private $liquido;
    private $litros;

    public function __construct($liquido,$litros)
    {
        $this->liquido = $liquido;
        $this->litros = $litros;
   
    }

    public function vaciar($litrosAVaciar){
        // $this->liquido = 100000 ;
        // $this->litros = 5000 ;
        //$resultado =( $this->litros- $litrosAVaciar);
          $this->litros -= $litrosAVaciar;
          $this->litros = ($this->litros<0) ? 0 : $this->litros;     
        return $this;
    }

    /**
     * Get the value of liquido
     */ 
    public function getLiquido()
    {
        return $this->liquido;
    }

    /**
     * Set the value of liquido
     *
     * @return  self
     */ 
    public function setLiquido($liquido)
    {
        $this->liquido = $liquido;

        return $this;
    }

    /**
     * Get the value of litros
     */ 
    public function getLitros()
    {
        return $this->litros;
    }

    /**
     * Set the value of litros
     *
     * @return  self
     */ 
    public function setLitros($litros)
    {
        $this->litros = $litros;

        return $this;
    }
 }

 $depositoMunicipal = new Deposito("agua",100000);
 
 echo $depositoMunicipal->vaciar();

 var_dump($depositoMunicipal);