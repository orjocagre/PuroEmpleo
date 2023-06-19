<?php
require_once("../controlador/perfil_fabrica_controlador.php");

if($_GET) {
    $controlador = new Perfil_fabrica_Controlador($_GET['idFabrica']);
}
else{
    $controlador = new Perfil_fabrica_Controlador("");
}

?>
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
                <img src="../assets/img/logo/<?php echo $controlador->datosFabrica[0]['logo'];?>" alt="">
            </Section>
            <section class="texto_perfil">
                <h1 class="nombre"><?php echo $controlador->datosFabrica[0]['nombre'];?></h1>
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
                </ul>
            </nav>
                   </div>
                   <div id="caja_empresa"><p id="texto_info" ><?php echo $controlador->datosFabrica[0]['descripcion'];?></p></div>

                    <div id="caja_ofertas">
                        
                        <section class="ofertas_publicadas">
                            
                            <div class="contenedor-ofertas">
                                <?php
                                if($controlador->datosOferta != null)
                                foreach($controlador->datosOferta as $oferta) {
                                    echo(
                                        '
                                        <article idOferta="'.$oferta['id'].'" puesto="'.$oferta['puesto'].'" fabrica="'.$oferta['fabrica'].'" municipio="'.$oferta['municipio'].'" barrio="'.$oferta['barrio'].'" direccion="'.$oferta['direccion'].'" fecha="'.$oferta['fecha'].'" horario="'.$oferta['horario'].'" salario="'.$oferta['salario'].'" prestaciones="'.$oferta['prestaciones'].'" descripcion="'.$oferta['descripcion'].'">
                                            <div class="contenedor-informacion">
                                                <p class="puesto">'.$oferta['puesto'].'</p>
                                                <p class="fecha"><span></span> Publicado el '.$oferta['fecha'].'</p>
                                            </div>
                                        </article>
                                        '
                                    );
                                }
                                if(count($controlador->datosOferta) == 0)
                                echo('<div class="sin-resultados"><p>No hay ofertas disponibles</p></div>');
                                ?>
                                
                            </div>
                            <div class="contenedor-descripcion">
                                <section class="encabezado">
                                    <h1>Bonchero</h1>
                                    <h2><a href="./perfil_fabrica.php">Fábrica Aganorsa</a></h2>
                                    <button class="btn-aplicar">Aplicar</button>
                                    <button class="btn-guardar">Guardar en Favoritos</button>
                                    <button class="btn-cerrar"></button>
                                </section>
                                <section class="info-general">
                                    <p class="ubicacion"><span></span> Br. Oscar Arnulfo Romero</p>
                                    <div>
                                        <p class="horario"><span></span> Tiempo completo</p>
                                        <p class="fecha"><span></span> Publicado el 7 de agosto</p>
                                    </div>
                                    
                                </section>
                                <section class="salario">
                                    <div>
                                        <h2>Salario</h2>
                                        <h3>C$10,440.00</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maxime molestias iure magnam commodi veritatis officia odio officiis facilis sit earum illum minima, excepturi sequi quidem perspiciatis accusamus mollitia repudiandae!</p>
                                </section>
                                <section class="prestaciones">
                                    <h2>Prestaciones</h2>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odit quo inventore laborum, suscipit, impedit odio nostrum recusandae expedita officiis blanditiis voluptatum, obcaecati esse doloribus ducimus earum ut! Ab et accusantium sunt pariatur impedit reprehenderit eos in nihil aliquam distinctio minus ut aut eius illum libero velit repellendus eaque nobis similique temporibus, dolorum, consectetur provident eligendi? Inventore libero tempore unde.</p>
                                </section>
                                <section class="descripcion">
                                    <h2>Descripcion del puesto</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cupiditate nesciunt illo animi debitis tempore libero, voluptates molestiae ad totam corporis, eaque a. Animi sunt, corrupti fuga earum esse quaerat fugit molestias dolore ab inventore nam quas, reiciendis autem praesentium perspiciatis dolores officiis dolorum aliquid eveniet magnam maxime! Cupiditate facere quos molestias deserunt commodi totam possimus, quod cumque, accusamus enim optio iusto vitae reprehenderit velit impedit ipsam eaque accusantium. Necessitatibus alias, reprehenderit dolor, maxime animi dignissimos repudiandae ratione, ipsum ipsa suscipit quisquam expedita officia quis eum neque fugiat ad! Non alias eligendi atque odit nesciunt consequuntur quod voluptates rerum saepe quae dolore aut magnam, fuga est veniam accusamus possimus iure dolorem vero iste odio cum ratione ipsam ab. Est error totam quaerat numquam ea quas expedita, accusamus quam libero ipsam nemo eius, itaque maiores ut aliquid dolorum doloribus iure doloremque.</p>
                                </section>
                            </div>
                
                            
                            <div class="contenedor-info">
                                <div class="cuadrado">
                                    <div class="texto">
                                        <p>Selecciona una oferta para visualizarla</p>
                                    </div>
                                </div>
                            </div>
            
                        </section>


                    </div>

                    <div id="caja_calificacion">
                        <div class="contenedor_publicar">

                            <div class="puntuacion_empresa">
                                <p id="texto_info" >Calificanos segun tu experiencia</p>
                                <div class="p_estrellas">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                               </div>   
                           </div>
                           <div class="comentario">
                                <h3>Agregar Comentario</h3>
                                <textarea name="comentario" class="text_comentario" cols="30" rows="10" placeholder="Describa su experiencia"></textarea>
                          </div>
                            <a href="#" class="publicar_calificacion">
                                <p>Publicar</p>
                            </a>
                        </div>
                        <div class="mi_opinion">
                            <div class="perfil_publicado">

                                <section class="perfil_f">
                                    <img src="../assets/img/perfil/fotos-perfil-whatsapp_16.webp" alt="">
                                </section>
                                <div class="info_publicada">
                                    <p>Sra.La Monalisa</p>
                                    <p>16/06/2023</p>
                                    <div class="perfil_estrellas">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                   </div>  
                              </div>  
                         </div>
                          <p class="parrafo_comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              Fugitsimilique accusantium iusto eaque dolor                              tempora, blanditiis veniam iusto accusantium 
                             voluptates non eligendi assumenda in nemo nulla doloremque?
                            </p>
                        </div>
                    </div>
                    
                    <!--<div id="caja"><p id="texto_info" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae cum, 
                    itaque ipsa quo consequatur omnis a magni adipisci quae beatae 
                    quibusdam aut voluptatem impedit, fuga sint! Explicabo, soluta. Temporibus, dicta.</p></div>-->

        </div>
        <!--PERFIL FABRICA INFO COMPLEMENTARIA-->
        <div class="container__info_complementaria">
            <div class="info_permanente">
                <section class="tiempo_laboral">
                    <i class="fa-solid fa-business-time"></i>
                    <p><?php echo $controlador->datosFabrica[0]['jornada'];?></p>
                </section>
                
                <section class="numero_empleados">
                    <i class="fa-solid fa-user"></i>
                    <p><?php echo $controlador->datosFabrica[0]['empleados'];?></p>
                </section>
    
                <section class="direccion_empresa">
                    <i class="fa-solid fa-location-dot"></i>
                    <p><?php echo $controlador->datosFabrica[0]['direccion'].', '.$controlador->datosFabrica[0]['barrio'].', '.$controlador->datosFabrica[0]['municipio'];?></p>
                    
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
       
        

  
        

    
   

   






   

</main>
<!--CREACIÓN FOOTER--> 
    <?php include("./footer.php");?>


 
    <script src="../assets/js/perfil_fabrica.js"></script>
</body>
</html>