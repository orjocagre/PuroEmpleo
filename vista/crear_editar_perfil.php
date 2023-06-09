<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ediccion_perfil.css">

</head>

<body>

<?php
include("./header.php");
require_once("../controlador/crear_editar_perfil_controlador.php");
$controlador = new Crear_Editar_Perfil_Controlador($_SESSION['idU']);

?>
    <main>
        <div class="ediccion_perfil">

            <div class="contenedor_empresa">
                <section class="foto_perfil">
                    <img src="../assets/img/logo/<?php echo $controlador->datosFabrica[0]['logo'];?>" alt="">
                </section>

                <div class="info_perfil">
                    <h2><?php echo $controlador->datosFabrica[0]['nombre'];?></h2>
                    <section class="numero_empleados">
                        <!--AGREGAR EL CAMBIO DE EMPLEADOS CON EL BTN CAMBIAR EL VALOR EN LA ETIQUETA P-->
                        <i class="fa-solid fa-user"></i>
                        <p><?php echo $controlador->datosFabrica[0]['empleados'];?> trabajadores</p>
                    </section>
                </div>


            </div>

            <div class="contenedor_botones">
                <a href="./agregar_oferta.php" class="agregar_ofertas">

                    <i class="fa-solid fa-plus"></i>
                    <p>Oferta</p>
                </a>
                <a href="#" class="estadisticas">
                    <i class="fa-solid fa-chart-line"></i>
                    <p>Estadísticas</p>s
                </a>
                <div class="editar_perfil">
                    <a href="./edit_perfil.php">
                        <i class="fa-solid fa-pen"></i>

                    </a>
                </div>


            </div>


        </div>
        <div class="titulo_ofertas_publicadas">
            <p>Ofertas Publicadas</p>
        </div>
        <section class="ofertas_publicadas">
            <div class="contenedor-ofertas">
                <?php
                if ($controlador->datosOferta != null)
                    foreach ($controlador->datosOferta as $oferta) {
                        echo (
                            '
                        <article idOferta="' . $oferta['id'] . '" puesto="' . $oferta['puesto'] . '" fabrica="' . $oferta['fabrica'] . '" municipio="' . $oferta['municipio'] . '" barrio="' . $oferta['barrio'] . '" direccion="' . $oferta['direccion'] . '" fecha="' . $oferta['fecha'] . '" horario="' . $oferta['horario'] . '" salario="' . $oferta['salario'] . '" salariodesc="' . $oferta['salario'] . '" prestaciones="' . $oferta['prestaciones'] . '" descripcion="' . $oferta['descripcion'] . '">
                            <div class="contenedor-informacion">
                                <p class="puesto">' . $oferta['puesto'] . '</p>
                                <p class="fecha"><span></span> Publicado el ' . $oferta['fecha'] . '</p>
                            </div>
                        </article>
                        '
                        );
                    }
                if (count($controlador->datosOferta) == 0)
                    echo ('<div class="sin-resultados"><p>No hay ofertas disponibles</p></div>');
                ?>

            </div>


            <div class="contenedor-descripcion">
                <section class="encabezado">
                    <h1>Bonchero</h1>
                    <h2><a href="./perfil_fabrica.php">Fábrica Aganorsa</a></h2>
                    <a href="./vista_solicitudes.php" class="btn-aplicar">Ver Solicitudes</a>
                    <button class="btn-guardar">Editar</button>
                    <button class="btn-guardar">Ocultar</button>
                    <button class="btn-guardar">Eliminar</button>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maxime molestias iure magnam
                        commodi veritatis officia odio officiis facilis sit earum illum minima, excepturi sequi quidem
                        perspiciatis accusamus mollitia repudiandae!</p>
                </section>
                <section class="prestaciones">
                    <h2>Prestaciones</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odit quo inventore laborum,
                        suscipit, impedit odio nostrum recusandae expedita officiis blanditiis voluptatum, obcaecati
                        esse doloribus ducimus earum ut! Ab et accusantium sunt pariatur impedit reprehenderit eos in
                        nihil aliquam distinctio minus ut aut eius illum libero velit repellendus eaque nobis similique
                        temporibus, dolorum, consectetur provident eligendi? Inventore libero tempore unde.</p>
                </section>
                <section class="descripcion">
                    <h2>Descripcion del puesto</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cupiditate nesciunt illo animi
                        debitis tempore libero, voluptates molestiae ad totam corporis, eaque a. Animi sunt, corrupti
                        fuga earum esse quaerat fugit molestias dolore ab inventore nam quas, reiciendis autem
                        praesentium perspiciatis dolores officiis dolorum aliquid eveniet magnam maxime! Cupiditate
                        facere quos molestias deserunt commodi totam possimus, quod cumque, accusamus enim optio iusto
                        vitae reprehenderit velit impedit ipsam eaque accusantium. Necessitatibus alias, reprehenderit
                        dolor, maxime animi dignissimos repudiandae ratione, ipsum ipsa suscipit quisquam expedita
                        officia quis eum neque fugiat ad! Non alias eligendi atque odit nesciunt consequuntur quod
                        voluptates rerum saepe quae dolore aut magnam, fuga est veniam accusamus possimus iure dolorem
                        vero iste odio cum ratione ipsam ab. Est error totam quaerat numquam ea quas expedita, accusamus
                        quam libero ipsam nemo eius, itaque maiores ut aliquid dolorum doloribus iure doloremque.</p>
                </section>
            </div>
            <div class="contenedor-info">
                <div class="cuadrado">
                    <div class="texto">
                        <p>Selecciona una oferta para visualizarla, editarla o ver quiénes an aplicado al puesto.</p>
                    </div>

                </div>

            </div>
        </section>










    </main>
    <?php include("./footer.php"); ?>
    <script src="../assets/js/crear_editar_perfil.js"></script>

    <script src="../assets/js/script.js"></script>

</body>

</html>