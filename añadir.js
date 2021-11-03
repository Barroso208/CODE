let boton = document.getElementById('añadir');
let body = document.getElementById('body');

let bloque = document.getElementById('bloque')
let input1 = document.querySelector('.numero');
let input2 = document.querySelector('.nombre');
let input3 = document.querySelector('.url');
let input4 = document.querySelector('.imagen');
let boton2 = document.querySelector('.submit');
let form = document.getElementById('bloque');
const localizador = document.querySelector('.inputLocalizacion');
/* AÑADIR EL DESPLEGABLE */
let h = false;
function desplegar(){
    if(h==false){
        bloque.style.display = 'flex';
        h = true;
    }else{
        bloque.style.display = 'none';
        h = false;
    }
}
/* COJER Y USAR LOS INPUTS */
function añadir(){
    
    h = false;
}
/* Información del numero en el formulario */
function infoForm(){
    const inputLocalizacion = document.querySelector('.inputLocalizacion');
    const inputNombre = document.querySelector('.inputNombre');
    const inputURL = document.querySelector('.inputURL');
    const inputImagen = document.querySelector('.inputImagen');
    document.addEventListener('keyup', function(){
        if((inputLocalizacion.value > 0)&&( inputLocalizacion  == document.activeElement )){
            let divC = document.querySelector('.a' + inputLocalizacion.value);
            inputNombre.value = divC.firstElementChild.firstElementChild.lastElementChild.textContent;
            inputURL.value = divC.firstElementChild.firstElementChild.href;
            inputImagen.value = divC.firstElementChild.firstElementChild.firstElementChild.src;}
    });
}
localizador.addEventListener('focus',function(){infoForm()});
boton.addEventListener('click',function(){desplegar()});
boton2.addEventListener('click',function(){añadir()});



