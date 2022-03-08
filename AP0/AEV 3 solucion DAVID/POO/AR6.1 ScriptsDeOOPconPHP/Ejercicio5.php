<?php
/*Ejercicio 5.- Crea una clase para definir objetos de tipo "Refresco", 
como atributos debes definir "sabor", "nivelAzucar" y "capacidadEnvase.
 A continuación añade un método constructor para inicializar el objeto, 
 luego crea dos objetos a partir de esta clase, 7
establece para uno de ellos valores de Cola-cola y para el otro, valores de Fanta, y 
finalmente muestra por consola estos objetos.*/

class Refresco{
    private $sabor;
    private $nivelAzucar;
    private $capacidadEnvase;
    private $cantidesValidas = [33,50,100,150,200];


    public function __construct($sabor,$nivelAzucar,$capacidadEnvase)
     {
    $this->sabor = $sabor;
    $this->nivelAzucar = $nivelAzucar;
    //$this->capacidadEnvase = $capacidadEnvase;
    $this->setCapacidadEnvase($capacidadEnvase);//Estp soirve para acceder al seter donde hemos metido las cantidades validas

    
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

    /**
     * Get the value of nivelAzucar
     */ 
    public function getNivelAzucar()
    {
        return $this->nivelAzucar;
    }

    /**
     * Set the value of nivelAzucar
     *
     * @return  self
     */ 
    public function setNivelAzucar($nivelAzucar)
    {
        $this->nivelAzucar = $nivelAzucar;

        return $this;
    }

    /**
     * Get the value of capacidadEnvase
     */ 
    public function getCapacidadEnvase()
    {
        return($this->capacidadEnvase == null) ? "(capacidad errónea)" : $this->capacidadEnvase;//ESTO ES UN TERNARIO:
        //(condicion)                          ?      valor si TRUE    :       valor si FALSE;
//-------------------------------------------------------------------------------------------------------------------//

        // if($this->capacidadEnvase == null){
        //     return"La cantidad es errónea";
        // }else{
        //     return $this->capacidadEnvase;
        // }
        
    }

    /**
     * Set the value of capacidadEnvase
     *
     * @return  self
     */ 
    public function setCapacidadEnvase($capacidadEnvase)
    {   
        if(
            $capacidadEnvase == 33 ||
            $capacidadEnvase == 50 ||
            $capacidadEnvase == 100 ||
            $capacidadEnvase == 150 ||
            $capacidadEnvase == 200 
        ) {
            $this->getCapacidadEnvase = $capacidadEnvase;
        }else{
            $this->capacidadEnvase = null;
        }
        
        return $this;
        
        /*INTENTO DE HACERLO EN CON UN ARRAY
        if(in_array($capacidadEnvase,$this->cantidadesValidas)){
            $this->color = $color;
        }else{
            $this->color = "Indeterminado";
        }

        return $this;
        $this->capacidadEnvase = $capacidadEnvase;

        */
    }
}

$cocacola = new Refresco("cola","mucho azucar",33);
$fanta = new Refresco("limon","no tanto azucar",33);

echo "Tenemos en stock refresco sabor : ". $cocacola->getSabor()."que contiene: ". $cocacola->getNivelAzucar()." y tiene una capacidad de: ".$cocacola->getCapacidadEnvase()."cl <br>";
echo "Y también tenemos en stock refresco sabor : ". $fanta->getSabor()."que contiene: ". $fanta->getNivelAzucar()." ,y tiene una capacidad de: ".$fanta->getCapacidadEnvase()."cl";