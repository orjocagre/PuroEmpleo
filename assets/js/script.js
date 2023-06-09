document.getElementById("btn_menu").addEventListener("click", mostrar_menu);
document.getElementById("back_menu").addEventListener("click", ocultar_menu);
nav = document.getElementById("nav");
background_menu=document.getElementById("back_menu");
main=document.querySelector("main");


function mostrar_menu(){
    nav.style.right = "-0px";
    background_menu.style.display = "block";
}

function ocultar_menu(){

    nav.style.right = "-250px";
    background_menu.style.display = "none";

    
}
/*MOSTRAR AL DAR CLIC MENU EN PERFIL DE PERSONA */
var clic = 1;

const txt_lugar = document.querySelector('.buscar_lugar');
const txt_puesto = document.querySelector('.buscar_tcargo');
const bandeja_lugar = document.querySelector('.bandeja_lugar');
const bandeja_puesto = document.querySelector('.bandeja_puesto');
const opciones_puesto = document.querySelectorAll('.opciones_puesto');
const opciones_lugar = document.querySelectorAll('.opciones_lugar');

opciones_puesto.forEach(function(button) {
    button.addEventListener('click', click_opcion_puesto);
})
opciones_lugar.forEach(function(button) {
    button.addEventListener('click', click_opcion_lugar);
})

txt_lugar.addEventListener('focus',desplegarOpcionesLugar);
txt_lugar.addEventListener('blur',ocultarOpcionesLugar);
txt_puesto.addEventListener('focus',desplegarOpcionesPuesto);
txt_puesto.addEventListener('blur',ocultarOpcionesPuesto);


function desplegarOpcionesPuesto() {
    bandeja_puesto.style.display = 'block';
    setTimeout(()=>{ bandeja_puesto.style.opacity = '1';},3);
}

function ocultarOpcionesPuesto() {
    bandeja_puesto.style.opacity = '0';
    setTimeout(()=>{ bandeja_puesto.style.display = 'none';},200);
}

function desplegarOpcionesLugar() {
    bandeja_lugar.style.display = 'block';
    setTimeout(()=>{ bandeja_lugar.style.opacity = '1';},3);

    
}

function ocultarOpcionesLugar() {
    bandeja_lugar.style.opacity = '0';
    setTimeout(()=>{ bandeja_lugar.style.display = 'none';},200);
}

function click_opcion_puesto(event) {

    seleccionado = event.currentTarget;  
    txt_puesto.value = seleccionado.innerHTML;
}
function click_opcion_lugar(event) {

    seleccionado = event.currentTarget;  
    txt_lugar.value = seleccionado.innerHTML;
}