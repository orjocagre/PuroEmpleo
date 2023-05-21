document.getElementById("btn_menu").addEventListener("click", mostrar_menu);
document.getElementById("back_menu").addEventListener("click", ocultar_menu);
nav = document.getElementById("nav");
background_menu=document.getElementById("back_menu");
main=document.querySelector("main");


function mostrar_menu(){
    nav.style.right = "0px";
    background_menu.style.display = "block";
}

function ocultar_menu(){

    nav.style.right = "-250px";
    background_menu.style.display = "none";

    
}
/*MOSTRAR AL DAR CLIC MENU EN PERFIL DE PERSONA */
var clic = 1;

function divLogin(){ 

   if(clic==1){

   document.getElementById("caja").style.height = "125px";
   document.getElementById("texto_info").style.display="block";

   clic = clic + 1;

   } else{

       document.getElementById("caja").style.height = "0px";  
       document.getElementById("texto_info").style.display="none";    

    clic = 1;

   }   

}
