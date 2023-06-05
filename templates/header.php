<?php 
$url_base="http://localhost/PuroEmpleo/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuroEmpleo</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/estilos.css?ver=1.0">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    
</head>
<body>
 <!--Creacción de header y Menú-->
 <header>
    <div class="container__header">
        <div class="logo">
            <a href="#">
              <img src="assets/img/logo/tabacologo.png" alt="">
            </a>
        </div>

        <div class="menu">
            <i class="fa-solid fa-bars" id="btn_menu"></i>
            <div id="back_menu"></div>

            <nav id="nav">
                <img src="/assets/img/logo/tabacologo.png" alt="">

                <li><a href="/puroempleoinfo.html">Quienes somos</a></li>
                <!--sujeto a cambios de aca en adelante-->
                    <li><a href="<?php echo $url_base;?>secciones/empleados/">empleados</a></li>

                    <li><a href="<?php echo $url_base;?>secciones/puestos/">Puestos</a></li>
                    <li><a href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a></li>
                    
                    <li><a href="/login.php" class="btn__inicio">Inicia Sesión</a></li>
                    <li><a href="/register.php" class="btn__registro">Registrate</a></li>
                    <li><a class="nav-link" href="/f.php" class="btn__registro">Cerrar session</a></li>
                </ul>
            </nav>
            
           
            
        </div>
    </div>

   

 </header>
   <main class="container">
    