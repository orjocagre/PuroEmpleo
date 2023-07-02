<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicción Perfil</title>
    <link rel="stylesheet" href="../assets/css/edit_perfil.css">


</head>

<body>
    <?php
    include("./header.php");
    require_once("../controlador/edit_perfil_controlador.php");
    $controlador = new Edit_Perfil_Controlador();

    if($_POST) {
        $controlador->insertarFabrica($_POST['direccion'],$_POST['barrio'],$_POST['telefono'],$_POST['correo'],$_POST['nombre'],0,$_POST['descripcion'],"logo.jpg",$_POST['jornada'],$_POST['empleados'],$_SESSION['nomU'],$_SESSION['idU']);
        header("Location: ./crear_editar_perfil.php");
    }

    ?>

    <main>
        <div class="ediccion_perfil">

            <form action="" class="ingresar_datos" method="post">
                <div>
                    <center>
                        <h3>Editar Perfil</h3>
                    </center>

                    <div class="ingresar_nombre">
                        <label>Nombre Fabrica</label>
                        <input type="text" name="nombre" placeholder="Escribe el nombre de la fabrica">
                    </div>
                    <div class="ingresar_correo">
                        <label>Correo Electrónico</label>
                        <input type="text" name="correo" placeholder="Escribe aqui tu correo electrónico">
                    </div>
                    <div class="ingresar_telefono">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" placeholder="Escribe aqui tu numero de teléfono">
                    </div>
                    <div class="ingresar_mensaje">

                        <label>Información:</label>
                        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="ubicacion">
                    <p>Jornada Laboral</p>
                    <input type="text" name="jornada" placeholder="Ingrese Jornada laboral">
                    <p>Numero de Empleados</p>
                    <input type="text" name="empleados" placeholder="Ingrese el numero de empleados">

                    <p>Barrio</p>
                    <select name="barrio" id="">
                        <?php
                        foreach ($controlador->datosBarrio as $barrio) {

                            echo '<option value="' . $barrio['id'] . '">' . $barrio['nombre'] . '</option>';
                        }
                        ?>

                    </select>
                    <p>Municipio</p>
                    <select name="municipio" id="">
                        <?php
                        foreach ($controlador->datosMunicipio as $municipio) {
                            echo '<option value="' . $municipio['id'] . '">' . $municipio['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                    <p>Dirección</p>
                    <textarea name="direccion" id="" cols="30" rows="10" placeholder="Ingrese su Dirreción"></textarea>
                    <div class="btn">
                        <button>Cancelar</button>
                        <button class="btn_agregar" type="submit">Guardar</button>

                    </div>
                </div>



            </form>


        </div>

    </main>
    <?php include("./footer.php"); ?>
    <script src="../assets/js/script.js?ver=1.0"></script>
</body>

</html>