/*Ejercicio 4.- Si todas las letras de la palabra introducida coinciden, 
cuando el jugador pulse el botón de comprobación, 
muestra un alert indicando que ha ganado la partida. ( 10 minutos )

Extra: En lugar de utilizar un alert, crear en el documento HTML un nuevo elemento h1, 
que al ganar la partida muestre un mensaje indicando que has ganado la partida. (+ 2 puntos)*/

var palabra = "carga";
var letrasPalabra = palabra.split("");
var intentos = 5;




document.addEventListener("DOMContentLoaded", main);
function main() {

    var boton = document.getElementById("comprobar")

    boton.addEventListener("click", function(){
        //console.log("Comprobando la palabra");
        let letrasAcertadas = 0;
        var allParas = document.getElementsByClassName('word');

            for(let i = 0; i < allParas.length; i++){
                if(allParas[i].value == letrasPalabra[i]){
                    allParas[i].style.borderColor = "green";
                    letrasAcertadas++;
                } else {
                    allParas[i].style.borderColor = "red";
                }
                
            }

            if(letrasAcertadas != 5){
                //alert("Has perdido la partida, mequetrefe");ESTAS FUNCIONAN
                document.write("<h1>Has perdido la partida</h1>")
            }else{
                //alert("Has ganado la partida, gambitero");ESTAS FUNCIONAN
                document.write("<h1>Has ganado la partida</h1>")
            }

            if(intentos == 1){
                alert("Has perdido");
                document.getElementById("intentos").innerHTML = "Has agotado los intentos";
            } else if( intentos > 0) {
                intentos--;
                document.getElementById("intentos").innerHTML = "Te quedan " + intentos + " intentos";
            }
      
    
    
    
    
    });

    document.getElementById("mostrarpista").addEventListener("mouseover", function(){
        
        if(ganado){
            document.getElementById("pista").style.backgroundColor = "green";
            document.getElementById("pista").innerHTML = "¡Ya no necesitas pistas!";
        } else{
            document.getElementById("pista").innerHTML = "C_R_A";
        }
  
 
     })
 
     document.getElementById("mostrarpista").addEventListener("mouseout", function(){
        document.getElementById("pista").innerHTML = "";
 
     })

}
