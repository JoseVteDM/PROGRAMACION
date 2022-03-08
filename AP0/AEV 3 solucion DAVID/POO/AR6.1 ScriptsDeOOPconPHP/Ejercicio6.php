<?php
/*Ejercicio 6.- Crea una clase para definir objetos de tipo "Producto",  
como atributos establece "denominacion", "unidadesStock" y "precio". 
Además del constructor, añade un método "reponer", que debe informar si estamos sin stock o no, 
es decir, si tenemos 0 productos o menos.
A continuación crea un objeto "tomate", con denominación "cherry", 10 unidades en stock y precio 5€/kg. 
Luego resta 5 unidades al stock.
Muestra por pantalla si tenemos stock. Finalmente, resta 5 unidades más al stock y muestra de nuevo si existe stock.*/

 class Producto{
    private $denominacion;
    private $unidadesStock;
    private $precio;

    public function __construct($denominacion,$unidadesStock,$precio)
     {
    $this->denominacion = $denominacion;
    $this->unidadesStock = $unidadesStock;
    $this->precio = $precio;
     }

     public function reponer(){
        //  $mensaje = "";
        //  if($this->unidadesStock <= 0){
        //      $mensaje = "No hay stock chavales";
        //  }else{
        //      $mensaje = "Hay un stock de locos";
        //  }
        //  return $mensaje;
          
        
        return ($this->setUnidadesStock > 0);//Esto es una comparacion, nos da true o false eso siempre asi es. cualquier comparacion
     }

     public function consumir($cantidad){
         $diferenciaStock = $this->getUnidadesStock() - $cantidad;
         if($diferenciaStock>=0){
             $this->setUnidadesStock = $diferenciaStock;
             return $cantidad;
             
         }else{
             $sto
            $this->setUnidadesStock() - $cantidad
             return ;
         }
     }

     public function info(){
        if($tomate->reponer()){ 
    
            echo " -Ya a la venta tomate ". $tomate->getDenominacion()." ,tenemos un stock de : ". $tomate->getUnidadesStock() ." unidades, de precio está a: ".$tomate->getPrecio()."<br>";
        
        }else{
            echo "No hay stock<br>";
        }
     }


    /**
     * Get the value of denominacion
     */ 
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set the value of denominacion
     *
     * @return  self
     */ 
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get the value of unidadesStock
     */ 
    public function getUnidadesStock()
    {
        return $this->unidadesStock;
    }

    /**
     * Set the value of unidadesStock
     *
     * @return  self
     */ 
    public function setUnidadesStock($unidadesStock)
    {
        //ESTO CON IF COMUN
        // if($unidadesStock <0){
        //    $this->$unidadesStock = 0;
        // }else{
        //     $this->unidadesStock = $unidadesStock;
        // }

        //OPERADOTR TERNARIOs
        $this->unidadesStock=($unidadesStock<0) ? 0 : $unidadesStock;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
    }


$tomate = new Producto("Cherry",10,"5euros/kg");


//Muestro info inicial
if($tomate->reponer()){ 
    
    echo " -Ya a la venta tomate ". $tomate->getDenominacion()." ,tenemos un stock de : ". $tomate->getUnidadesStock() ." unidades, de precio está a: ".$tomate->getPrecio()."<br>";

}else{
    echo "No hay stock<br>";
}




//Modifico restando 5
$stockActual = $tomate->getUnidadesStock();
$tomate->setUnidadesStock($stockActual-5);

//Vuelvo a mostrar  despues de restar 5
if($tomate->reponer()){ 
    
    echo " -Ya a la venta tomate ". $tomate->getDenominacion()." ,tenemos un stock de : ". $tomate->getUnidadesStock() ." unidades, de precio está a: ".$tomate->getPrecio()."<br>";

}else{
    echo "No hay stock<br>";
}

//Vuelvo a restar 5
$stockActual = $tomate->getUnidadesStock();
$tomate->setUnidadesStock($stockActual-5);

//Vuelvo a mostrar  despues de restar 5 otra vez
if($tomate->reponer()){ 
    
    echo " -Ya a la venta tomate ". $tomate->getDenominacion()." ,tenemos un stock de : ". $tomate->getUnidadesStock() ." unidades, de precio está a: ".$tomate->getPrecio()."<br>";

}else{
    echo "No hay stock<br>";
}

