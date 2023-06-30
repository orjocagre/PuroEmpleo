<?php
require_once("../controlador/perfil_trabajador_controlador.php");
session_start();
print_r($_SESSION['idU']);
$controlador = new Perfil_trabajador_Controlador($_SESSION['idU']);
print_r($controlador->datosTrabajador[0]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/perfil_trabajador.css">
</head>

<body>
    <?php include("../vista/header.php"); ?>


    <main>

        <div class="encabezado_trabajador">
            <picture>
                <img class="logo_trabajador" src="../assets/img/fperfil/<?php echo $controlador->datosTrabajador[0]['foto']; ?>" alt="">
            </picture>
            <div class="texto_perfil">
                <h1 class="nombre">
                    <?php echo $controlador->datosTrabajador[0]['primernombre'] . " " . $controlador->datosTrabajador[0]['segundonombre'] . " " . $controlador->datosTrabajador[0]['primerapellido'] . " " . $controlador->datosTrabajador[0]['segundoapellido']; ?>
                </h1>
                <h2 class="puesto">
                    <?php echo $controlador->datosTrabajador[0]['puesto']; ?>
                </h2>
            </div>

        </div>
        <div class="menu_perfil">
            <button class="btn__empresa" onclick="divinfo(event)">CURRICULUM</button>
            <button class="btn__ofertas" onclick="divinfo(event)">ESTADO OFERTAS</button>
            <button class="btn__calificacion" onclick="divinfo(event)">FAVORITAS</button>
        </div>
        <div id="caja_curriculum">
            <p class="texto_desc">Cedula:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['cedula']; ?></p>
            <p class="texto_desc">Edad:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['edad']; ?></p>
            <p class="texto_desc">Sexo:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['sexo']; ?></p>
            <p class="texto_desc">Telefono:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['telefono']; ?></p>
            <p class="texto_desc">Correo:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['correo']; ?></p>
            <p class="texto_desc">Dirección:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['direccion']; ?></p>
            <p class="texto_desc">Barrio:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['barrio']; ?></p>
            <p class="texto_desc">Municipio:</p>
            <p class="texto_info"><?php echo $controlador->datosTrabajador[0]['municipio']; ?></p>

            <p class="texto_desc">Experiencia:</p>
            <table class="tbexperiencia">
                <thead>
                    <tr>
                        <th>Puesto</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controlador->datosExperiencia as $experiencia) {
                        echo '
                    <tr>
                        <td>' . $experiencia['puesto'] . '</td>
                        <td>' . $experiencia['inicio'] . '</td>
                        <td>' . $experiencia['final'] . '</td>
                        <td>' . $experiencia['descripcion'] . '</td>
                    </tr>
                    ';
                    } ?>
                </tbody>
            </table>

        </div>

        <div id="caja_estado_oferta">

            <div class="contenedor-ofertas">
                <?php
                if ($controlador->datosOferta != null)
                    foreach ($controlador->datosOferta as $oferta) {
                        echo ('
                        <article idOferta="' . $oferta['id'] . '" puesto="' . $oferta['puesto'] . '" fabrica="' . $oferta['fabrica'] . '" idfabrica="' . $oferta['idfabrica'] . '" municipio="' . $oferta['municipio'] . '" barrio="' . $oferta['barrio'] . '" direccion="' . $oferta['direccion'] . '" fecha="' . $oferta['fecha'] . '" horario="' . $oferta['horario'] . '" salario="' . $oferta['salario'] . '" salariodesc="' . $oferta['salariodesc'] . '" prestaciones="' . $oferta['prestaciones'] . '" descripcion="' . $oferta['descripcion'] . '">
                            <img class="img-fabrica" src="../assets/img/logo/' . $oferta['logo'] . '" alt="' . $oferta['logo'] . '">
                            <div class="contenedor-informacion">
                                <p class="puesto">' . $oferta['puesto'] . '</p>
                                <p class="fabrica-aganorsa">' . $oferta['fabrica'] . '</p>
                                <p class="ubicacion"><span></span> Br. ' . $oferta['barrio'] . ' - ' . $oferta['municipio'] . '</p>
                                <p class="fecha"><span></span> Publicado el ' . $oferta['fecha'] . '</p>
                            </div>
                            <p class="estado">'.$oferta['estado'].'</p>
                        </article>');
                    }
                if (count($controlador->datosOferta) == 0)
                    echo ('<div class="sin-resultados"><p>No hay ofertas disponibles</p></div>');
                ?>

            </div>


            <div class="contenedor-descripcion">
                <section class="encabezado">
                    <h1>Bonchero</h1>
                    <h2><a href="./perfil_fabrica.php">Fábrica Aganorsa</a></h2>
                    <button class="btn-eliminar">Retirar solicitud</button>
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
        </div>

        <div id="caja_favoritos">

            <div class="contenedor-ofertas">
                <?php
                if ($controlador->datosOferta != null)
                    foreach ($controlador->datosOferta as $oferta) {
                        echo ('
                        <article idOferta="' . $oferta['id'] . '" puesto="' . $oferta['puesto'] . '" fabrica="' . $oferta['fabrica'] . '" idfabrica="' . $oferta['idfabrica'] . '" municipio="' . $oferta['municipio'] . '" barrio="' . $oferta['barrio'] . '" direccion="' . $oferta['direccion'] . '" fecha="' . $oferta['fecha'] . '" horario="' . $oferta['horario'] . '" salario="' . $oferta['salario'] . '" salariodesc="' . $oferta['salariodesc'] . '" prestaciones="' . $oferta['prestaciones'] . '" descripcion="' . $oferta['descripcion'] . '">
                            <img class="img-fabrica" src="../assets/img/logo/' . $oferta['logo'] . '" alt="' . $oferta['logo'] . '">
                            <div class="contenedor-informacion">
                                <p class="puesto">' . $oferta['puesto'] . '</p>
                                <p class="fabrica-aganorsa">' . $oferta['fabrica'] . '</p>
                                <p class="ubicacion"><span></span> Br. ' . $oferta['barrio'] . ' - ' . $oferta['municipio'] . '</p>
                                <p class="fecha"><span></span> Publicado el ' . $oferta['fecha'] . '</p>
                            </div>
                            <p class="estado">'.$oferta['estado'].'</p>
                        </article>');
                    }
                if (count($controlador->datosOferta) == 0)
                    echo ('<div class="sin-resultados"><p>No hay ofertas disponibles</p></div>');
                ?>

            </div>


            <div class="contenedor-descripcion">
                <section class="encabezado">
                    <h1>Bonchero</h1>
                    <h2><a href="./perfil_fabrica.php">Fábrica Aganorsa</a></h2>
                    <button class="btn-eliminar">Retirar solicitud</button>
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
        </div>














    </main>

    <?php include("../vista/footer.php"); ?>
    <script src="../assets/js/perfil_trabajador.js"></script>

</body>

</html>