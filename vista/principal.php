<?php
require_once("../controlador/busqueda_controlador.php");
$controlador = new Busqueda_Controlador("","");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuroEmpleo</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/estilos.css?ver=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    
    
</head>
<body>
    <?php include("./header.php");
    // print_r("idU: ".$_SESSION['idU']);
    // print_r("/nomU: ".$_SESSION['nomU']);
    // print_r("/logueado: ".$_SESSION['logueado']);
    // print_r("/esfabrica: ".$_SESSION['esfabrica']);
    ?>
    
   
     
   <main>
        <!--Portada-->


        <div class="container__portada div__offset">
            <div class="portada">
                <section class="text__portada">
                   
                    <p>La esencia del tabaco, conectando talento con oportunidades en el diamante de las Segovia</p>
                    
                </section>
                <section class="imagen_portada">
                    <img src="../assets/img/portada/portada.png" alt="">

                </section>
            </div>
        </div>
        <div class="contenedor_barra">
            <form class="barreda_de_busqueda" action="../vista/busqueda_vista.php" method="post">
                
                <div class="cargo">
                    <i class="fa-solid fa-briefcase iconos_busquedas " ></i>
                    <input type="text" class="buscar_tcargo" placeholder="Cargo o puesto"  name="puesto" autocomplete="off">
                
                    <!-- bandeja de opciones -->
                
                    <div class="bandeja_opciones bandeja_puesto">
                        <?php
                        if($controlador->datosPuesto != null)
                        foreach($controlador->datosPuesto as $puesto) {
                            echo ('<button type="button" class="opciones_puesto">'.$puesto['nombre'].'</button>');
                        }
                        ?>
                    </div>
                </div>
                    
                <!-- fin bandeja de opciones -->

                <div class="lugar">
                    <i class="fa-solid fa-location-dot iconos_busquedas"></i>
                    <input type="text" class="buscar_lugar" placeholder="Lugar" name="lugar" autocomplete="off">
                    <!-- bandeja de opciones -->
                    <div class="bandeja_opciones bandeja_lugar">
                    <?php
                    if($controlador->datosMunicipio != null)
                    foreach($controlador->datosMunicipio as $municipio) {
                        echo ('<button type="button" class="opciones_lugar">'.$municipio['nombre'].'</button>');
                    }
                    if($controlador->datosBarrio != null)
                    foreach($controlador->datosBarrio as $barrio) {
                        echo ('<button type="button" class="opciones_lugar opciones_barrio">'.$barrio['nombre'].' - '.$barrio['municipio'].'</button>');
                    }
                    ?>
                    </div>
                    <!-- fin bandeja de opciones -->
                    

                </div>

                <button class="boton" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </form>  
            
        </div>
        <div class="acceso_plataforma">
               <div class="btns_acceso">
                 <a href="./busqueda.html" class="btn__accinicio">Inicia Sesión</a>
                 <a href="./perfil_trabajador.php" class="btn__accregistro">Registrate</a>
               </div>
                
                
        </div>

   </main>
  
   <?php include("./footer.php");?>
    <script src="../assets/js/script.js"></script>
</body>

</html>