const contenedor_descripcion = document.querySelector('.contenedor-descripcion');
const contenedor_ofertas = document.querySelector('.contenedor-ofertas');
const article_oferta = document.querySelectorAll('article');
const btn_cerrar = document.querySelector('.btn-cerrar');
const puesto = document.querySelector('.encabezado h1');
const fabrica = document.querySelector('.encabezado h2');
const ubicacion = document.querySelector('.info-general .ubicacion');
const horario = document.querySelector('.info-general .horario');
const fecha = document.querySelector('.info-general .fecha');
const salario = document.querySelector('.salario h3');
const prestaciones = document.querySelector('.prestaciones p');
const descripcion = document.querySelector('.descripcion p');
const contenedor_info = document.querySelector('.contenedor-info');
const txt_lugar = document.querySelector('.buscar_lugar');
const txt_puesto = document.querySelector('.buscar_tcargo');
const bandeja_lugar = document.querySelector('.bandeja_lugar');
const bandeja_puesto = document.querySelector('.bandeja_puesto');
const opciones_puesto = document.querySelectorAll('.opciones_puesto');
const opciones_lugar = document.querySelectorAll('.opciones_lugar');

let seleccionado = null;

let scrollActual = 0;

article_oferta.forEach(function(article) {
    article.addEventListener('click', click_article_oferta);
})

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

btn_cerrar.addEventListener('click',click_btn_cerrar);

function click_article_oferta(event) {

    if(seleccionado != null) seleccionado.classList.remove("seleccionado");
    seleccionado = event.currentTarget;  
    puesto.innerHTML = seleccionado.attributes.puesto.value;
    fabrica.innerHTML = '<a href="./perfil_fabrica.php">'+seleccionado.attributes.fabrica.value+'</a>';
    ubicacion.innerHTML = '<span></span> '+seleccionado.attributes.direccion.value+', '+seleccionado.attributes.barrio.value+', '+seleccionado.attributes.municipio.value;
    horario.innerHTML = '<span></span> '+seleccionado.attributes.horario.value;
    fecha.innerHTML = '<span></span> Publicado el '+seleccionado.attributes.fecha.value;
    salario.innerHTML = 'C$ '+parseFloat(seleccionado.attributes.salario.value).toLocaleString('en-US');
    prestaciones.innerHTML = seleccionado.attributes.prestaciones.value;
    descripcion.innerHTML = seleccionado.attributes.descripcion.value;
    
    if(window.matchMedia('(min-width: 1024px)').matches) {
        seleccionado.classList.add("seleccionado");
        contenedor_info.style.display = 'none';
        contenedor_descripcion.style.display = 'block';
        contenedor_descripcion.classList.add("click-oferta");
        
        setTimeout(() => {
            contenedor_descripcion.classList.remove("click-oferta");
        },200);
        
    }
    else {
        scrollActual = window.scrollY;
        contenedor_ofertas.style.display = 'none';
        contenedor_descripcion.style.display = 'block';
        window.scrollTo(0,0);

    }
}

function click_btn_cerrar() {
    if(window.matchMedia('(min-width: 1024px)').matches) {
        seleccionado.classList.remove("seleccionado");
        contenedor_descripcion.style.display = 'none';
        contenedor_info.style.display = 'block';
    }
    else {
        contenedor_descripcion.style.display = 'none';
        contenedor_ofertas.style.display = 'block';
        window.scrollTo(0,scrollActual);
    }
}

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