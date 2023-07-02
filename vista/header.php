<?php
session_start();
$url_base="http://localhost/PuroEmpleo";



//if(!isset($_SESSION['usuario'])){
//    header("Location:".$url_base."login.php"); <li><a href="/login.php" class="btn__inicio">Inicia Sesión</a></li>
//}
?>
<!--Creacción de header y Menú-->
<head>
    <link rel="stylesheet" href="../assets/css/header_footer.css">
</head>
<header>
    <div class="container__header">
        <div class="logo">
            <a href="./principal.php">
              <img src="../assets/img/logo/tabacologo.png" alt="">
            </a>
        </div>

        <div class="menu">
            <i class="fa-solid fa-bars" id="btn_menu"></i>
            <div id="back_menu"></div>

            <nav id="nav">
                <img src="../assets/img/logo/tabacologo.png" alt="">

                <ul> 
                    
                    <li><a href="./puroempleoinfo.php">Quienes somos</a></li>
                    <li><a href="./cotactanos.php">Contactanos</a></li>
                    
                    
                    <?php
                    if($_SESSION['logueado']) {
                        if($_SESSION['esfabrica']) {
                            echo '<li><a href="./crear_editar_perfil.php" class="btn__registro">'.$_SESSION['nomU'].'</a></li>';
                        }
                        else {
                            echo '<li><a href="./perfil_trabajador.php" class="btn__registro">'.$_SESSION['nomU'].'</a></li>';
                        }
                        echo '<li><a class="nav-item nav-link" href="'.$url_base.'/index.php">Cerrar Sesion</a></li>';
                    }
                    else {
                        echo '<li><a href="'.$url_base.'/acces/login.php" class="btn__inicio">Inicia Sesión</a></li>
                        <li><a href="'.$url_base.'/register.php" class="btn__registro">Registrate</a></li>';
                    }
                    ?>
                </ul>
            </nav>
            
           
            
        </div>
    </div>

   

 </header>