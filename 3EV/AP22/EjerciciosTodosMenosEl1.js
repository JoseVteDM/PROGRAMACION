
document.addEventListener("DOMContentLoaded", main);



function main() {
    ej2();
    ej3();
    ej4();
    ej5();
}



/*                            Ejercicio2.

- Añade en el interior de cada párrafo una texto con la información de cuantas palabras tiene este párrafo,
 al estilo de "total palabras: 99". Esta información debe estar en negrita y en una linea nueva.*/


function ej2() {
    let parrafos = document.getElementsByTagName("p");
    for (let i = 0; i < parrafos.length; i++) {
        let parrafo = parrafos[i];
        let texto = parrafo.innerHTML;
        let numPalabras = texto.split(" ").length;
        let muestraNumPalabras = document.createElement("div");

        //let mensaje = "<strong>total palabras: " + numPalabras +"</strong>"; --------Esto es una manera de añadirle negrita 
        //muestraNumPalabras.innerHTML = mensaje;

        let mensaje = document.createElement("strong");//Esto es otra manera
        mensaje.innerHTML = "total palabras: " + numPalabras;
        muestraNumPalabras.appendChild(mensaje);
        parrafo.appendChild(muestraNumPalabras);
        console.log(numPalabras);
    }

}





/*Ejercicio 3.- Encuentra en cualquier párrafo la palabra "nulla"
y conviértela en un enlace a http://google.com */

function ej3() {
    let parrafos = document.getElementsByTagName("p");//Expresiones regulares, algo muy complicado 
    //que de normal no vemos /nulla/gi
    for (i = 0; i < parrafos.length; i++) {
        let texto = parrafos[i].innerHTML;
        texto = texto.replace(/nulla/gi, "<a href ='http://google.com'>nulla</a>");
        parrafos[i].innerHTML = texto;
    }
}



/*
let parrafos = document.getElementsByTagName("p")
for(i = 0 ; i < parrafos.length ; i++){
    let texto = parrafos[i].innerHTML.toUpperCase();
    let bloques = texto.split("nulla");

    for(let j = 0 ;j <parrafos.length ; j++ ){
        parrafos[i].innerHTML = bloques[j];
        if( j < bloques.length -1 ){
            let enlace = document.createElement("a");
            enlace.href = "http://google.com";
            enlace.innerHTML = "nulla";
            parrafos[i].appendChild(enlace);
        }
        
    }  
}
}   */


/*Ejercicio 4.-

Añade la imágen  https://lledogrupo.com/wp-content/uploads/2019/01/star-256.png
a continuación del texto que contiene cada encabezado H1. Esta imágen debe tener un ancho de 16px
y estar separada 10px del texto del encabezado. No puedes usar innerHTML. */



function ej4() {
    let h1 = document.getElementsByTagName("h1");
    for (let i = 0; i < h1.length; i++) {
        let imagen = document.createElement("img");
        imagen.src = "https://lledogrupo.com/wp-content/uploads/2019/01/star-256.png";
        imagen.style.width = "16px";
        imagen.style.marginLeft = "10px";
        h1[i].appendChild(imagen);
    }



    /*HECHO X MI, KK
    let imagenes = document.getElementsByTagName("h1");
    for(i = 0 ; i <imagenes.length ; i++){
        let imagen = imagenes[i].innerHTML;
        imagen =appendChild;
        parrafos[i].innerHTML = texto;
    }*/

}



/*Ejercicio 5.
- Haz que el párrafo content cambie su color de fondo al hacer click sobre él. 
  Al hacer un segundo click debe volver a su color original y así sucesivamente.*/

/*HECHO POR MI

function ej5(){

     document.getElementById("content").addEventListener("mouseover", function(){
        document.getElementById("content").style.backgroundColor = "red";
        
    })

}*/
function ej5() {
    let content = document.getElementById("content");
    content.addEventListener("click", function () {
        let colorActual = window.getComputedStyle
        if (window.getComputedStyle(this).getPropertyValue) ("background-color") == "red");
    {
        this.style.backgroundColor = "red";
    }
    //eSTO LOArreglo con rgb, esta la foto en la galeria de mi movil
}
}
/**Ejercicio 6.- Haz que el párrafo content aumente su tamaño de letra en un píxel cada vez
  que hacemos click. Si llega a medir el doble que el tamaño original de letra
   del documento, debe volver a este valor. */
function ej6() {

    let content = document.getElementsById("content");
    content.addEventListener("click", function () {
        let size = window.getComputedStyle(document.body);
        if (window.getComputedStyle(this).getPropertyValue) ("font-weight") = ! "content");
    {
        this.font - weight = size;
    })
}
})


/*Ejercicio 7.- Haz que los botones etiquetados con el class "oculta", sean capaces de ocultar 
el div contiguo. Una vez hecho esto, el tecto del botón debe cambiar a "mostrar", y si hacemos click sobre él,
 debe mostrar de nuevo el div contiguo.*/

 function ej7(){
    let botones = document.getElementsByClassName("oculta");
    for (let i = 0; i < array.length; i++) {
        const element = array[i];
        
    }

    /*let content = document.getElementsByClassName.appendChild("ocult");
    content.addEventListener("click", function () {
        let hide = window.("");
        if (window.getComputedStyle(this).getPropertyValue) ("font-weight") = ! "content");
 }*/