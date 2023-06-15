<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ediccion_perfil.css">

</head>
<body>
   
    <?php include("./header.php");?>
    <main>
        <div class="ediccion_perfil">
            
            <div class="contenedor_empresa">
                <section class="foto_perfil">
                    <img src="../assets/img/logo/oliva.jpg" alt="">
                </section>
                   
                <div class="info_perfil">
                    <h2>*GRUPO OLIVA*</h2>
                    <section class="numero_empleados">
                        <!--AGREGAR EL CAMBIO DE EMPLEADOS CON EL BTN CAMBIAR EL VALOR EN LA ETIQUETA P-->
                        <i class="fa-solid fa-user"></i>
                        <p>5340 trabajadores</p>
                    </section>
                </div>


            </div>
            
            <div class="contenedor_botones">
                <div class="agregar_ofertas">
                    <p>AGREGAR OFERTAS</p>
               </div>

               <div class="editar_perfil">
                    <i class="fa-solid fa-pen"></i>
                    <p>Editar</p>
               </div>

            </div>

          
        </div>


       







    </main>
    <?php include("./footer.php");?>

</body>
</html>