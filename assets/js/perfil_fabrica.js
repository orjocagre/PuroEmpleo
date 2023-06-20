
function divinfo(event) {
    console.log(event.currentTarget);


    /*---------------------------
 
    if(clic==1){
 
    document.getElementById("caja").style.height = "125px";
    document.getElementById("texto_info").style.display="block";
    
    /*---------------------------*/
    var caja_empresa = document.getElementById("caja_empresa");
    var caja_ofertas = document.getElementById("caja_ofertas");
    var caja_calificacion = document.getElementById("caja_calificacion");

    if (event.currentTarget == document.querySelector(".btn__empresa")) {
        caja_empresa.style.height = "fit-content";
        caja_empresa.style.display = "block";
        caja_ofertas.style.height = "0px";
        caja_ofertas.style.display = "none";
        caja_calificacion.style.height = "0px";
        caja_calificacion.style.display = "none";
    }
    else if (event.currentTarget == document.querySelector(".btn__ofertas")) {
        caja_ofertas.style.height = "fit-content";
        caja_ofertas.style.display = "block";
        caja_empresa.style.height = "0px";
        caja_empresa.style.display = "none";
        caja_calificacion.style.height = "0px";
        caja_calificacion.style.display = "none";

    }
    else if (event.currentTarget == document.querySelector(".btn__calificacion")) {
        caja_calificacion.style.height = "fit-content";
        caja_calificacion.style.display = "block";
        caja_ofertas.style.height = "0px";
        caja_ofertas.style.display = "none";
        caja_empresa.style.height = "0px";
        caja_empresa.style.display = "none";
    }


    /*----------------
    clic = clic + 1;
    
   } else{
       
       document.getElementById("caja").style.height = "0px";
       document.getElementById("texto_info").style.display="none";
       
       clic = 1;
       
   }
   ----------*/
}




/*--------------------------------ofertas publicadas-------------------------------------------------------------*/

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

let seleccionado = null;

let scrollActual = 0;

article_oferta.forEach(function(article) {
    article.addEventListener('click', click_article_oferta);
})


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
        contenedor_info.style.display = 'flex';
    }
    else {
        contenedor_descripcion.style.display = 'none';
        contenedor_ofertas.style.display = 'block';
        window.scrollTo(0,scrollActual);
    }
}
/*--------------------------------fin ofertas publicadas-------------------------------------------------------------*/


