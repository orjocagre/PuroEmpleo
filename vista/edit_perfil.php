<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicción Perfil</title>
    <link rel="stylesheet" href="../assets/css/edit_perfil.css">


</head>

<body>
    <?php include("./header.php"); ?>
    <main>
        <div class="ediccion_perfil">

            <form action="" class="ingresar_datos">
                <div>
                    <center>
                        <h3>Editar Perfil</h3>
                    </center>

                    <div class="ingresar_nombre">
                        <label>Nombre Fabrica</label>
                        <input type="text" placeholder="Escribe el nombre de la fabrica">
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

                        <label>Información:</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="ubicacion">
                    <p>Jornada Laboral</p>
                    <input type="text" placeholder="Ingrese Jornada laboral">
                    <p>Numero de Empleados</p>
                    <input type="text" placeholder="Ingrese el numero de empleados">

                    <p>Barrio</p>
                    <select name="" id="">
                        <option>Oscar Gamez</option>
                        <option>Rosario</option>
                    </select>
                    <p>Municipio</p>
                    <select name="" id="">
                        <option>Estelí</option>
                        <option>Trinidad</option>
                    </select>
                    <p>Dirección</p>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Ingrese su Dirreción"></textarea>
                    <div class="btn">
                        <button>Cancelar</button>
                        <button class="btn_agregar" type="submit" form="frm">Guardar</button>

                    </div>
                </div>



            </form>


        </div>

    </main>
    <?php include("./footer.php"); ?>
    <script src="../assets/js/script.js?ver=1.0"></script>
</body>

</html>