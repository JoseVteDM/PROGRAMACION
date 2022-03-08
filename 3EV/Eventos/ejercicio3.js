/*Ejercicio 3.- Modifica el código JS para que al pulsar el botón se comparen las 
letras de la palabra que has introducido con 
las de la palabra prefijada del programa. Las letras que coincidan 
pasarán a tener el borde del input verde, y las que no, 
pasarán a tenerlo rojo.

Crea una variable global palabra con la palabra a adivinar. 
Para dividir dicha palabra en un array de letras,
 usar el método predefinido por JS split. (40 minutos)

Pista: Para leer las letras de la palabra introducida conviene recordar que todos los inputs pertenecen a la clase “word”. 

Extra: Modificar la aplicación para que las letras que coincidan entre ambas palabras, pero no estén en la posición correcta, 
pasen a tener el borde amarillo. ( + 10 puntos)*/


var palabra = "carga";
var palabraCorrecta = Array.from(palabra);
console.log(palabraCorrecta);


var intentos = 5;

document.addEventListener("DOMContentLoaded", main);
function main() {

    var boton = document.getElementById("comprobar")
    var word = document.getElementsByClassName("word")
    boton.addEventListener("click", function(){
        //console.log("Comprobando la palabra");
            
            for(i=0; i<palabraCorrecta.length; i++){
                if(word[i].value == palabraCorrecta[i]){
                    word[i].style.borderColor = "green";
                }else{
                    word[i].style.borderColor = "red";
                }
            }

            //Ejercicio 2
            if(intentos == 1){
                alert("Has perdido");
                document.getElementById("intentos").innerHTML = "Has agotado los intentos";
            } else if( intentos > 0) {
                intentos--;
                document.getElementById("intentos").innerHTML = "Te quedan " + intentos + " intentos";
            }
      
    
    
    
    
    });

}


//value esta el valor de un atributo, bucle for