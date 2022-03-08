<?php

class Coche{
    private $combustible;
    private $color;
    private $puertas;
    private $matricula;
    private $motor;
    private  $coloresValidos = ["rojo","negro","azul"];

    public function __construct($combustible,$color,$puertas, $matricula,$motor)
    {
        $this->setCombustible($combustible);
        $this->setColor($color);
        $this->puertas = $puertas;
        $this->matricula = $matricula;
        $this->motor = $motor;
    }

    public function esFamiliar(){
        $mensaje = "";
        if($this->puertas>3){
            $mensaje = "Es familiar";
        }else{
            $mensaje = "No es familiar";
        };
        return $mensaje;
    }

    public function caducidad(){
        $mensaje = "";
        switch($this->combustible){
            case "diesel":
                $mensaje = "Lo usarás hasta 2030";
                break;
            case "gasolina":
                $mensaje = "Lo usarás hasta 2035";
                break;
            default;
            $mensaje = "Lo usarás hasta el fin de los dias";
            break;
        }
        return $mensaje;
    }
    public function setCombustible($dato){
        $this->combustible = strtolower($dato);
        return $this;
    }
    public function getCombustible(){
        return $this->combustible;
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
        $color = strtolower($color);
        /*
        if($color == "rojo" || $color == "azul" || $color == "negro"){
            $this->color = $color;
        }else{
            $this->color = "Indeterminado";
        }*/
       
        if(in_array($color,$this->coloresValidos)){
            $this->color = $color;
        }else{
            $this->color = "Indeterminado";
        }

        return $this;
    }
}//con los get si que he de poner return si o si con los sets no hace falta


$coche1 = new Coche("DieseL","Rojo",3,"ABC 4567","1.6");//EL CONSTRUCTOR SIRVE PARA NO TENER QUE PONER TODO ESTO TODO EL RATO LINIEA90 A 95 Y 98 102
// $coche1->matricula = "ABC 4567";
// $coche1->motor = "1.6";
// ///$coche1->combustible = "Diesel";
// $coche1->setCombustible("DieseL");
// $coche1->color = "rojo";
// $coche1->puertas = 3;

$coche2 = new Coche("Gasolina","Azul",5,"JFG 9284","1.34");
// $coche2->matricula = "JFG 9284";
// $coche2->motor = "1.34";
// $coche2->setCombustible("Gasolina");
// $coche2->color = "Azul";
// $coche2->puertas = 5;


//var_dump($coche1,$coche2);




echo "El coche 1 es de color:"." ".$coche1->getColor()." y ".$coche1->esFamiliar()." pero en el". $coche1->caducidad()." ya no podrás utilizarlo en el territorio de la UE"." porque el coche es ".$coche1->getCombustible();