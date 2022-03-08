<?php
/*Ejercicio 8.- Crea una clase "Estudiante", y como atributos establece el "nombre" y la "nota",
 siendo ésta última un atributo privado. A parte del constructor, añade un getter y un setter, 
 de forma que no se pueda establecer notas por debajo de 0 o por encima de 10, 
 tomándose como criterio que si la nota es superior a 10, se establece en 10, y si es inferior a 0, se establece en 0. 
 Crea un objeto "alumno" con nombre "david", con nota inicial 12, y muestra su nota por consola.
  modifica la nota a -3 y vuelve a mostrar la nota.*/ 


class Estudiante{
    private $nombre;
    private $nota;


    public function __construct($nombre,$nota)
    {
    $this->nombre = $nombre;
    $this->setNota($nota);
   
     }

    

    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota($nota)
    {
        if($nota >= 0 && $nota<=10 ){
            $this->nota = $nota;
        }elseif($nota>10){
            $this->nota = 10;
        }elseif($nota<0){
            $this->$nota=0;
        

        return $this;
    }

    }
    }
$Alumno = new Estudiante("David",12);

print_r($Alumno);
$valor = $Alumno->getNota();//Porque esta privado nota y get abre la puerta y lo ,metemos en valor
$Alumno->setNota($Alumno->getNota()-3);//Aqui ya con el valor podemos cambiarlo el set

print_r($Alumno);


    