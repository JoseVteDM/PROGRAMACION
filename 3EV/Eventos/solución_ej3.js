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
