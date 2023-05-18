const contenedor_descripcion = document.querySelector('.contenedor-descripcion');
const contenedor_ofertas = document.querySelector('.contenedor-ofertas');
const article_oferta = document.querySelectorAll('article');
const btn_cerrar = document.querySelector('.btn-cerrar');
let scrollActual = 0;

article_oferta.forEach(function(article) {
    article.addEventListener('click', click_article_oferta);
})

btn_cerrar.addEventListener('click',click_btn_cerrar);

function click_article_oferta() {
    if(!window.matchMedia('(min-width: 1024px)').matches) {
        scrollActual = window.scrollY;
        contenedor_ofertas.style.display = 'none';
        contenedor_descripcion.style.display = 'block';
        window.scrollTo(0,0);
    }
}

function click_btn_cerrar() {
    if(!window.matchMedia('(min-width: 1024px)').matches) {
        contenedor_descripcion.style.display = 'none';
        contenedor_ofertas.style.display = 'block';
        console.log(scrollActual);
        window.scrollTo(0,scrollActual);
    }
}