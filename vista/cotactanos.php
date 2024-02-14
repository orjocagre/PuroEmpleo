<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="../assets/css/contactanos.css">

</head>

<body>
    <?php include("./header.php"); ?>
    <main>


        <div class="datos">
            <section>
                <img src="../assets/img/perfil/contactanos.png" alt="">
                <div class="info_contacto">

                    <h3>
                        <center>(505)2714-5891</center>
                    </h3>
                    <h3>
                        <center>Email:adminPuroEmpleo18@gmail.com</center>
                    </h3>
                </div>
            </section>
            <form action="" class="ingresar_datos">
                <center>
                    <h3>Envianos un Correo Electrónico</h3>
                </center>

                <div class="ingresar_nombre">
                    <label>Nombre Completo</label>
                    <input type="text" placeholder="Escribe aqui tu nombre completo">
                </div>
                <div class="ingresar_correo">
                    <label>Correo Electrónico</label>
                    <input type="text" placeholder="Escribe aqui tu correo electrónico">
                </div>
                <div class="ingresar_telefono">
                    <label>Teléfono</label>
                    <input type="text" placeholder="Escribe aqui tu numero de teléfono">
                </div>
                <div class="ingresar_mensaje">

                    <label>Mensaje:</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn_agregar" type="submit" form="frm">Enviar Mensaje</button>

            </form>

        </div>
    </main>
    <?php include("./footer.php"); ?>



    <script src="../assets/js/script.js?ver=1.0"></script>
</body>

</html>