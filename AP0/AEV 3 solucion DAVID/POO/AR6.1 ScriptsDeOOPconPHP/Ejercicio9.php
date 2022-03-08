<?php
/*Ejercicio 9.- Crea una clase "Jugador", con atributos "nombre" y "dorsal", 
A continuación, crea una clase "Delantero que hereda de "Jugador", con el atributo "goles", 
crea tambien una clase "Portero" que hereda de "Jugador" con el atributo "paradas". 
Añade los constructores necesarios para crear dos objetos,
uno de tipo "Delantero" con los datos "Leo Messi",10, 50, y otro de tipo "Portero", 
con los datos "Iker Casillas", 1, 35. Finalmente, muestra los objetos por consola.

*/

class Estudiante{
    private $nombre;// de private hay que cambialo a protected para que hereden su clase
    private $email;
    private $nota;

    public function asistirAClase(){}
    public function hacerEjercicios(){}
    public function hacerExamen(){}
}

class Profesor{
    private $nombre;
    private $dni;
    private $email;
    private $nota;

    public function asistirAClase(){
        return "has asistido HOY a clase";
    }
    public function corregir(){}
}

class Persona{
    private $nombre;
    private $dni;
    private $email;
    private $nota;
        echo "Has asistido hoy a clase";

}

class Alumno extends Persona{
    private $nota;
    public function corregir(){}

    
}

$Alonso = new Alumno("Alonso");
$David = new Profesor("David");
//var_dump($Alonso);

echo $Alonso->asistirAClase();
echo $David->asistirAClase();