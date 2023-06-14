<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Fabrica</title>

    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/perfil_fabrica.css">
</head>
<body>

    <?php include("./header.php");?>
<main>
    

    <div class="perfil__fabrica">

        
        <div class="info_fabrica">

            <Section class="logo_fabrica">
                <img src="../assets/img/logo/oliva.jpg" alt="">
            </Section>
            <section class="texto_perfil">
                <h1>OLIVA</h1>
                <p>La familia Oliva es de origen cubano, con una historia que se remonta a 1866, 
                    cuando Melanio Oliva empezó a cultivar tabaco en Pinar del Río, 
                    el famoso valle del tabaco.
               </p>
            </section>
           
        </div>
 
          <!--CREACION DE MENU PARA EL PERFIL DE LA FABRICA
            VISTA POR EL USUARIO-->
        
           <div class="menu_perfil">
             <nav id="nav">
                <ul>
                    <li><a href="#" class="btn__empresa"  onclick="divinfo(event)">Información</a></li>
                    <li><a href="#" class="btn__ofertas" onclick="divinfo(event)">Ofertas</a></li>
                    <li><a href="#" class="btn__calificacion" onclick="divinfo(event)">calificación</a></li>
                   </div>
                   <!--<div id="caja_empresa"><p id="texto_info" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae cum, 
                    itaque ipsa quo consequatur omnis a magni adipisci quae beatae 
                    quibusdam aut voluptatem impedit, fuga sint! Explicabo, soluta. Temporibus, dicta.</p></div>

                    <div id="caja_ofertas"><p id="texto_info" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae cum, 
                    itaque ipsa quo consequatur omnis a magni adipisci quae beatae 
                    quibusdam aut voluptatem impedit, fuga sint! Explicabo, soluta. Temporibus, dicta.</p></div>

                    <div id="caja_calificacion"><p id="texto_info" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae cum, 
                    itaque ipsa quo consequatur omnis a magni adipisci quae beatae 
                    quibusdam aut voluptatem impedit, fuga sint! Explicabo, soluta. Temporibus, dicta.</p></div>-->
                    
                    <div id="caja"><p id="texto_info" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae cum, 
                    itaque ipsa quo consequatur omnis a magni adipisci quae beatae 
                    quibusdam aut voluptatem impedit, fuga sint! Explicabo, soluta. Temporibus, dicta.</p></div>


                </ul>
            </nav>   

        </div>
        <!--PERFIL FABRICA INFO COMPLEMENTARIA-->
        <div class="container__info_complementaria">
            <div class="info_permanente">
                <section class="tiempo_laboral">
                    <i class="fa-solid fa-business-time"></i>
                    <p>Jornada ordinaria</p>
                </section>
                
                <section class="numero_empleados">
                    <i class="fa-solid fa-user"></i>
                    <p>5340</p>
                </section>
    
                <section class="direccion_empresa">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Principal</p>
                </section>
                <div class="redes">
                    <div class="box__redes">
                        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
        
                    <div class="box__redes">
                       <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                    </div>
             
                    <div class="box__redes">
                       <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                     
                </div>
               

            </div>
           

        </div>
       
        

   
    </div>
    
        

    
   

   






   

</main>
<!--CREACIÓN FOOTER--> 
    <?php include("./footer.php");?>


 
    <script src="../assets/js/script.js?ver=1.0"></script>
</body>
</html>