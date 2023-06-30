<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes</title>
    <link rel="stylesheet" href="../assets/css/estilo_solicitudes.css">
</head>

<body>
    <?php include("./header.php"); ?>
    <main>


        <div class="solicitudes_publicadas">
            <h1>Bonchero</h1>
            <h5>Publicado:12/05/2023</h5>
        </div>
        <div class="mostrar_solicitud">


            <div class="solicitudes">
                <table class="estilo_tabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Experiencia</th>
                            <th>Estado</th>

                        </tr>

                    </thead>
                    <tbody>
                        <tr class="postulante">
                            <td>Juan Perez</td>
                            <td>18</td>
                            <td>Masculino</td>
                            <td>5 años de experiencia</td>
                            <td>Pendiente</td>
                        </tr>
                        <tr class="postulante">
                            <td>Maria J</td>
                            <td>20</td>
                            <td>Femenina</td>
                            <td>4 años de experiencia</td>
                            <td>Aceptado</td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <div class="perfil" hidden>
                <div class="botones">
                    <button>Aceptar</button>
                    <button>Rechazar</button>
                </div>
                <div class="mensaje">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="enviar">Enviar</button>

                </div>

                <div class="informacion">
                    <section>
                        <img src="../assets/img/perfil/fotos-perfil-whatsapp_16.webp" alt="">
                        <h1>Monalisa Perez</h1>
                    </section>
                    <section>
                        <label>Edad:20</label>
                        <br>
                        <label>Cedula:161-028958-1000L</label>
                        <br>
                        <label>Telefono:89456587</label>
                    </section>

                </div>
                <h4>Dirrección:</h4>
                <p>Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Debitis veniam beatae
                    aperiam minus asperiores aut voluptatem
                    fuga, similique necessitatibus provident
                    illo soluta ipsam, quidem adipisci numquam
                    cumque. Eveniet, voluptas consequatur.
                </p>
                <h4>Correo:</h4>
                <p>monapere16@gmail.com</p>
                <h4>Experiencia:</h4>
                <p>4 Años de bonchera en la fabrica Tabolisa</p>


            </div>
        </div>



        
    </main>
    <?php include("./footer.php"); ?>
    <script src="../assets/js/solicitudes.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>