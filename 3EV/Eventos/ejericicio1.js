var contador = 5;


document.addEventListener("DOMContentLoaded", main);//DOMContent loaded se hace como funciobn nativa, le damos el nombre a la funcion addeventlistener


var intentos =  document.getElementById("intentos");
function main(){

    var boton = document.getElementById("comprobar")//podemos coger por el id por el class name 
    
  /*MI SOLUCION CHUSTOSA */ 
    boton.addEventListener("click",function(){
        contador = (contador -1) ;
        intentos.innerHTML = "Te quedan"+" "+ contador +" "+"intentos";
        console.log("comprobando la palabra");
        if(contador==0){
            intentos= "Te quedan"+" "+ contador +" "+"intentos";
        
        }
    })
    
    }
