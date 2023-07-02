<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Oferta</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/estilo_ofertas.css">
</head>

<body>
    <?php
    include("./header.php");
    require_once("../controlador/agregar_oferta_controlador.php");
    $controlador = new Agregar_Oferta_Controlador($_SESSION['idU']);
    if ($_POST) {
        $controlador->insertarOferta($_POST['direccion'], $_POST['barrio'], $_POST['puesto'], $_SESSION['idU'], $_POST['salario'], $_POST['horario'], $_POST['prestaciones'], $_POST['descripcion']);
        header("Location: ./crear_editar_perfil.php");
    }
    ?>

    <main>



        <form class="contenedor_oferta" id="frm" action="#" method="post">
            <Section>
                <h1>
                    <center><?php echo $controlador->datosFabrica[0]['nombre']; ?></center>
                </h1>
                <img src="../assets/img/logo/<?php echo $controlador->datosFabrica[0]['logo']; ?>" alt="">
            </Section>


            <div class="agregar_nueva">
                <h3>Agregar una nueva oferta</h3>
                <div class="agregar_puesto">
                    <label>Puesto:</label>
                    <!--AGREGAR PHP-->
                    <select name="puesto">
                        <?php
                        foreach ($controlador->datosPuesto as $puesto) {
                            echo '<option value="' . $puesto['id'] . '">' . $puesto['nombre'] . '</option>';
                        }
                        ?>
                    </select>

                </div>
                <!--AGREGAR PHP INGRESAR PUESTO-->
                <div class="ingresar_descripcion">
                    <label>Descripcion del puesto:</label>
                    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Describa el puesto"></textarea>
                </div>
                <!--AGREGAR PHP INGRESAR SALARIO-->
                <div class="ingresar_salario">
                    <label>Salario:</label>
                    <input type="text" placeholder="Ingrese salario" name="salario">
                </div>
                <!--AGREGAR PHP INGRESAR Ingresar Experiencia-->
                <div class="ingresar_prestaciones">

                    <label>Prestaciones:</label>
                    <textarea name="prestaciones" id="" cols="30" rows="10" placeholder="Escriba las prestaciones"></textarea>
                </div>



            </div>
            <div class="guardar_informacion">

                <div class="informacion_empresa">
                    <h3>Datos de la Empresa</h3>

                    <!--AGREGAR PHP INGRESAR Ingresar Dirrección-->
                    <div class="agregar_area">
                        <label>Dirección:</label>
                        <input name="direccion" type="text" placeholder="Ingrese la dirrección">
                    </div>
                    <!--AGREGAR PHP INGRESAR Ingresar Agregar Barrio-->
                    <div class="ingresar_barrio">
                        <label>Seleccionar Barrio:</label>
                        <select name="barrio">
                            <?php
                            foreach ($controlador->datosBarrio as $barrio) {

                                echo '<option value="' . $barrio['id'] . '">' . $barrio['nombre'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <!--AGREGAR PHP INGRESAR Ingresar Agregar Barrio-->
                    <div class="ingresar_Municipios">
                        <label>Seleccionar Municipio:</label>
                        <select name="municipio">
                            <?php
                            foreach ($controlador->datosMunicipio as $municipio) {
                                echo '<option value="' . $municipio['id'] . '">' . $municipio['nombre'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <!--AGREGAR PHP INGRESAR Ingresar Ingresar Barrio-->
                    <div class="ingresar_fecha">
                        <div action="/send/">
                            <label>Selecciona la fecha deseada:</label>
                            <input type="date" value="2024-02-25">
                        </div>
                    </div>
                    <div class="ingresar_horario">
                        <label>Jornada Laboral</label>
                        <input name="horario" type="text" placeholder="Ingrese la Jornada">
                    </div>
                    <section class="fondo">
                        <img src="../assets/img/perfil/oja_tabac.png" alt="">
                    </section>

                </div>
                <button class="btn_agregar" type="submit" form="frm">Agregar Oferta</button>
            </div>




        </form>

    </main>
    <?php include("./footer.php"); ?>
    <script src="../assets/js/script.js"></script>
</body>

</html>