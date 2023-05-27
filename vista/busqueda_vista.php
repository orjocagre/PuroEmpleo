<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuroEmpleo</title>
    <link rel="stylesheet" href="../assets/css/busqueda.css">
    <link rel="stylesheet" href="../assets/css/busqueda-laptop.css" media="(min-width: 1024px)">

</head>
<body>
    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                  <img src="../assets/img/logo/tabacologo.png" alt="">
                </a>
             </div>
             <div class="menu">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../assets/img/logo/tabacologo.png" alt="">
    
                    <ul>
                        
                        <li><a href="#">Quienes somos</a></li>
                        <li><a href="#">Contactos</a></li>
                        
                        <li><a href="#" class="btn__inicio">Inicia Sesión</a></li>
                        <li><a href="#" class="btn__registro">Registrate</a></li>
                    </ul>
                </nav>
                
               
                
             </div>
        </div>
    
       
    
    </header>
    <div class="contenedor_barra">
        <div class="barreda_de_busqueda">
            
            <div class="cargo">
                <i class="fa-solid fa-briefcase iconos_busquedas " ></i>
                <input type="text" class="buscar_tcargo" placeholder="Cargo o puesto">
            </div>

            <div class="lugar">
                <i class="fa-solid fa-location-dot iconos_busquedas"></i>
                <input type="text" class="buscar_lugar" placeholder="Lugar">
            </div>

            <a href="" class="boton">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>

        </div>  
        
    </div>
    <main>


        <div class="contenedor-ofertas">
            <?php
            if($datosOferta != null)
            foreach($datosOferta as $oferta) {
                echo(
                    '
                    <article idOferta="'.$oferta['id'].'" puesto="'.$oferta['puesto'].'" fabrica="'.$oferta['fabrica'].'" ubicacion="'.'Br. Oscar Arnulfo Romero'.'" fecha="'.$oferta['fecha'].'" horario="'.$oferta['horario'].'" salario="'.$oferta['salario'].'" prestaciones="'.$oferta['prestaciones'].'" descripcion="'.$oferta['descripcion'].'">
                        <img class="img-fabrica" src="../assets/icons/aganorsa.jpg" alt="">
                        <div class="contenedor-informacion">
                            <p class="puesto">'.$oferta['puesto'].'</p>
                            <p class="fabrica-aganorsa">'.$oferta['fabrica'].'</p>
                            <p class="ubicacion"><span></span> Br. Oscar Arnulfo Romero</p>
                            <p class="fecha"><span></span> Publicado el '.$oferta['fecha'].'</p>
                        </div>
                    </article>
                    '
                );
            }
            ?>
        </div>

        
        <div class="contenedor-descripcion">
            <section class="encabezado">
                <h1>Bonchero</h1>
                <h2>Fábrica Aganorsa</h2>
                <button class="btn-aplicar">Aplicar</button>
                <button class="btn-guardar">Guardar en favoritos</button>
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
            <div class="circulog"></div>
            <div class="cuadrado"></div>
            <div class="circulop"></div>
            <div class="texto">
                <p>Somos la bolsa de empleo de Estelí, creamos PuroEmpleo con el fin de conectar a los mejores candidatos con las mejores oportunidades laborares en el sector del tabaco, ayudamos a las empresas a encontrar al profesional que encaje mejor con sus necesidades.</p>
            </div>

        </div>

    </main>
    <footer></footer>
    <script src="../assets/js/busqueda.js"></script>
</body>
</html>