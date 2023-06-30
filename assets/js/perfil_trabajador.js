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
const salariodesc = document.querySelector('.salario p');
const prestaciones = document.querySelector('.prestaciones p');
const descripcion = document.querySelector('.descripcion p');
const contenedor_info = document.querySelector('.contenedor-info');


let seleccionado = null;
let id_fabrica_seleccionada = null;

let scrollActual = 0;

article_oferta.forEach(function(article) {
    article.addEventListener('click', click_article_oferta);
})


btn_cerrar.addEventListener('click',click_btn_cerrar);

function click_article_oferta(event) {

    
    if(seleccionado != null) seleccionado.classList.remove("seleccionado");
    seleccionado = event.currentTarget;  
    puesto.innerHTML = seleccionado.attributes.puesto.value;
    fabrica.innerHTML = '<a href="./perfil_fabrica.php?idFabrica='+seleccionado.attributes.idfabrica.value+'">'+seleccionado.attributes.fabrica.value+'</a>';
    ubicacion.innerHTML = '<span></span> '+seleccionado.attributes.direccion.value+', '+seleccionado.attributes.barrio.value+', '+seleccionado.attributes.municipio.value;
    horario.innerHTML = '<span></span> '+seleccionado.attributes.horario.value;
    fecha.innerHTML = '<span></span> Publicado el '+seleccionado.attributes.fecha.value;
    salario.innerHTML = 'C$ '+parseFloat(seleccionado.attributes.salario.value).toLocaleString('en-US');
    salariodesc.innerHTML = seleccionado.attributes.salariodesc.value;
    prestaciones.innerHTML = seleccionado.attributes.prestaciones.value;
    descripcion.innerHTML = seleccionado.attributes.descripcion.value;
    id_fabrica_seleccionada = seleccionado.attributes.idfabrica.value;
    
    scrollActual = window.scrollY;
    contenedor_ofertas.style.display = 'none';
    contenedor_descripcion.style.display = 'block';
    contenedor_barra.style.display = 'none';

    
    window.scrollTo(0,100);
}

function click_btn_cerrar() {
    contenedor_descripcion.style.display = 'none';
        contenedor_ofertas.style.display = 'block';
        contenedor_barra.style.display = 'block';
        window.scrollTo(0,scrollActual);
}