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
    <?php include("./header.php"); ?>
    <main>
        <form class="curriculum">
            <div class="datos">



                <div class="agregar_perfil">
                    <center>
                        <h1>CURRICULUM</h1>
                        
                    </center>
                    <section>
                        
                        <P>Agregar Foto</P>
                        <i class="fa-solid fa-image"></i>
                        <input type="file" accept="image/png, image/jpeg">
                        <P>Primer nombre:</P>
                        <input type="text" placeholder="Ingrese su nombre">
                        <P>Segundo nombre:</P>
                        <input type="text" placeholder="Ingrese su nombre">
                        <P>Primer apellido:</P>
                        <input type="text" placeholder="Ingrese su apellido">
                        <P>Segundo apellido:</P>
                        <input type="text" placeholder="Ingrese su nombre">

                    </section>
                </div>
                <div class="datos_personales">
                    <p>Cedula</p>
                    <input type="text" placeholder="Ingrese su Cedula">
                    <p>Edad</p>
                    <input type="text" placeholder="Ingrese su Edad">

                    <p>Sexo</p>
                    <select name="" id="">
                        <option>Femenino</option>
                        <option>Maculino</option>
                    </select>
                    <p>Telefono:</p>
                    <input type="text" placeholder="Ingrese su Numero">
                    <p>Correo</p>
                    <input type="text" placeholder="Ingrese su Correo">





                </div>
                <div class="ubicacion">
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
                <button>Guardar</button>
            </div>
            
        </form>





    </main>
    <?php include("./footer.php"); ?>

</body>

</html>