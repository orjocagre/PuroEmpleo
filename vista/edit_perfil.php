<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicción Perfil</title>
    <link rel="stylesheet" href="../assets/css/ediccion_perfil.css">

</head>

<body>
    <?php include("./header.php"); ?>
    <main>
        <div class="ediccion_perfil">

            <form action="" class="ingresar_datos">
                <center>
                    <h3>Editar Perfil</h3>
                </center>
                
                <div class="ingresar_nombre">
                    <label>Nombre Fabrica</label>
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