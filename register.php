<?php

include("./config.php");

if (isset($_POST['submit'])) {

   session_start();

   $name = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
   $correoe = (isset($_POST["correoe"]) ? $_POST["correoe"] : "");
   $pass = (isset($_POST["password"]) ? $_POST["password"] : "");
   $cpass = (isset($_POST["cpassword"]) ? $_POST["cpassword"] : "");
   $chbfabrica = (isset($_POST["chbfabrica"]) ? true : false);

   $sentencia = $conexion->prepare("SELECT COUNT(*)
      FROM usuario
      WHERE nombre_usuario=:usuario");


   $sentencia->bindParam(":usuario", $name);
   $sentencia->execute();

   $lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);

   if ($lista_usuarios['count'] > 0) {
      $message = "este usuario ya existe!";
   } else {
      if ($pass != $cpass) {
         $message = "confirmacion de contraseña no es la misma!";
      } else {
         $fechaactual = date("Y-m-d");
         $sql = "INSERT INTO usuario(nombre_usuario,password,id_estado_usuario,correo,fecha_creacion) VALUES ('" . $name . "','" . $pass . "',1,'" . $correoe . "','" . $fechaactual . "')";
         $sentencia = $conexion->prepare($sql);
         $sentencia->execute();

         $sentencia = $conexion->prepare("SELECT usuario.id as id, usuario.nombre_usuario as nombre FROM usuario WHERE nombre_usuario='".$name."' AND password='".$pass."'");
         $sentencia->execute();

         $lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);

         $_SESSION['idU'] = $lista_usuarios['id'];
         $_SESSION['nomU'] = $lista_usuarios['nombre'];
         $_SESSION['logueado'] = true;
         
         
         
         if ($chbfabrica) {
            $_SESSION['esfabrica'] = true;
            header("Location: ./vista/edit_perfil.php");
            
         } else {
            $_SESSION['esfabrica'] = false;
            header("Location: ./vista/add_curriculum.php");
         }
      }
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <link rel="stylesheet" href="../../assets/css/header_footer.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>


<body>
   <?php
   if (isset($message)) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
   ?>

   <!--div class="form-container">

    <form action="" method="post">

        <h3>registrate ahora</h3>

        <input type="text" name="name" placeholder="Ingrese un nombre de usuario" required class="box">

        <input type="correoe" name="correoe" placeholder="Ingrese su correoe" required class="box">

        <input type="contraseæa" name="password" placeholder="Ingrese su contraseña" required class="box">

        <input type="contraseæa" name="cpassword" placeholder="Confirme su contraseña" required class="box">


        <input type="submit" name="submit" value="registrarse" class="btn">

        <P> ya tienes una cuenta? <a href="login.php"> Inicia Sesion! </a></P>
    </form>
</div-->
   <main>

      <br />

      <div class="container">
         <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
               <br />
               <br />
               <div class="card">
                  <div class="card-header">
                     Regristro de cuenta
                  </div>
                  <div class="card-body">
                     <form action="" method="post">

                        <div class="mb-3">
                           <label for="usuario" class="form-label">Nombre del usuario:</label>
                           <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese un nombre de usuario">
                        </div>

                        <div class="mb-3">
                           <label for="correoe" class="form-label">Correo</label>
                           <input type="correoe" class="form-control" name="correoe" id="correoe" aria-describedby="helpId" placeholder="Ingrese su correo">
                        </div>

                        <div class="mb-3">
                           <label for="password" class="form-label">Contraseña</label>
                           <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese su contraseña">
                        </div>

                        <div class="mb-3">
                           <label for="cpassword" class="form-label">confirmacion contraseña</label>
                           <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="helpId" placeholder="Confirme su contraseña">
                        </div>

                        <input type="checkbox" class="form-check-input" name="chbfabrica" value="1">Esta es una cuenta de Fabrica<br>
                        <br />
                        <input type="submit" name="submit" value="registrarse" class="btn btn-primary">


                        <a name="" id="" class="btn btn-secondary" href="./vista/principal.php" role="button">cancelar</a>


                        <P> ya tienes una cuenta? <a href="./acces/login.php"> Inicia Sesion! </a></P>

                     </form>
                  </div>
                  <div class="card-footer text-muted">

                  </div>
               </div>
            </div>

         </div>
      </div>

      </div>
   </main>

   <footer>

   </footer>
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
   </script>
</body>

</html>