<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="../assets/css/add_curriculum.css">
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("./header.php");

    require_once("../controlador/add_curriculum_controlador.php");
    $controlador = new Add_Curriculum_Controlador();

    if ($_POST) {

        $foto = $_FILES['foto'];
        $nombreArchivo = $foto['name'];

        if ($foto['error'] == UPLOAD_ERR_OK) {
            $nombreTemporal = $foto['tmp_name'];

            $rutaDestino = "../assets/img/fperfil/" . $nombreArchivo;
            move_uploaded_file($nombreTemporal, $rutaDestino);

        } else {
            $nombreArchivo = "usuariosinfoto";
        }

        $controlador->insertarCurriculum($_POST['descdireccion'], $_POST['barrio'], $_POST['numtelefono'], $_POST['dircorreo'], $_POST['primernombre'], $_POST['segundonombre'], $_POST['primerapellido'], $_POST['segundoapellido'], $_POST['cedula'], $_POST['edad'], $_POST['sexo'], $_SESSION['idU'], $foto['name'], "", $_POST['id_puesto'], date('Y-m-d'));
        header("Location: ./perfil_trabajador.php");
    }

    ?>
    <main>
        <form class="curriculum" method="POST" enctype="multipart/form-data">
            <div class="datos">



                <div class="agregar_perfil">
                    <center>
                        <h1>CURRICULUM</h1>

                    </center>
                    <section>

                        <P>Agregar Foto</P>
                        <i class="fa-solid fa-image"></i>
                        <input name="foto" type="file" accept="image/png, image/jpeg">
                        <P>Primer nombre:</P>
                        <input name="primernombre" type="text" placeholder="Ingrese su nombre">
                        <P>Segundo nombre:</P>
                        <input name="segundonombre" type="text" placeholder="Ingrese su nombre">
                        <P>Primer apellido:</P>
                        <input name="primerapellido" type="text" placeholder="Ingrese su apellido">
                        <P>Segundo apellido:</P>
                        <input name="segundoapellido" type="text" placeholder="Ingrese su nombre">

                    </section>
                </div>
                <div class="datos_personales">
                    <p>Cedula</p>
                    <input name="cedula" type="text" placeholder="Ingrese su Cedula">
                    <p>Edad</p>
                    <input name="edad" type="text" placeholder="Ingrese su Edad">

                    <p>Sexo</p>
                    <select name="sexo" id="">
                        <option value="2">Femenino</option>
                        <option value="3">Masculino</option>
                    </select>
                    <p>Telefono:</p>
                    <input name="numtelefono" type="text" placeholder="Ingrese su Numero">
                    <p>Correo</p>
                    <input name="dircorreo" type="text" placeholder="Ingrese su Correo">





                </div>
                <div class="ubicacion">
                    <p>Puesto</p>
                    <select name="id_puesto" id="">
                        <?php
                        foreach ($controlador->datosPuesto as $puesto) {
                            echo '<option value="' . $puesto['id'] . '">' . $puesto['nombre'] . '</option>';
                        }
                        ?>
                    </select>
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
                    <textarea name="descdireccion" id="" cols="30" rows="10" placeholder="Ingrese su Dirreción"></textarea>
                </div>
            </div>

            <div class="experiencia">
                <h3>Experiencia:</h3>
                <i class="fa-solid fa-plus"></i>
                <table class="estilo_tabla">
                    <thead>
                        <tr>
                            <th>Puesto</th>
                            <th>Inicio</th>
                            <th>Fin</th>
                            <th>Descripción</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" placeholder="Ingrese puesto"></td>
                            <td><input type="date"></td>
                            <td><input type="date"></td>
                            <td><input type="text" placeholder="Ingrese experiencia"></td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="botones">
                <button>Cancelar</button>
                <button type="submit">Guardar</button>
            </div>

        </form>





    </main>
    <?php include("./footer.php"); ?>

</body>

</html>