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
    <?php include("./header.php");?>
    
   
     
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
            <div class="barreda_de_busqueda">
                
                <div class="cargo">
                    <i class="fa-solid fa-briefcase iconos_busquedas " ></i>
                    <input type="text" class="buscar_tcargo" placeholder="Cargo o puesto">
                </div>

                <div class="lugar">
                    <i class="fa-solid fa-location-dot iconos_busquedas"></i>
                    <input type="text" class="buscar_lugar" placeholder="Lugar">
                </div>

                <a href="" class="boton">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

            </div>  
            
        </div>
        <div class="acceso_plataforma">
               <div class="btns_acceso">
                 <a href="./busqueda.html" class="btn__accinicio">Inicia Sesión</a>
                 <a href="#" class="btn__accregistro">Registrate</a>
               </div>
                
                
        </div>

   </main>
  
   <?php include("./footer.php");?>
    <script src="../assets/js/script.js"></script>
</body>

</html>