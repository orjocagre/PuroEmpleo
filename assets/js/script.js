document.getElementById("btn_menu").addEventListener("click", mostrar_menu);
document.getElementById("back_menu").addEventListener("click", ocultar_menu);
nav = document.getElementById("nav");
background_menu=document.getElementById("back_menu");
main=document.querySelector("main");
function mostrar_menu(){
    nav.style.right = "0px";
    background_menu.style.display = "block";
   /* main.style.backgroundColor= "#1F2B0B";*/
}

function ocultar_menu(){

    nav.style.right = "-250px";
    background_menu.style.display = "none";

    
}
