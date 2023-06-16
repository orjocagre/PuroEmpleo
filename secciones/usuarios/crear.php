
<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header_footer.css">

</head>

<body>
<?php include("../../config.php");

if($_POST){
  //recoleccion de datos mediante post
   $usuario=(isset($_POST["usuario"])?$_POST["usuario"]:"");
   $password=(isset($_POST["password"])?$_POST["password"]:"");
   $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
   //poner la fecha de creacion
   
   //preparar la inserccion de los datos
   $sentencia=$conexion->prepare("INSERT INTO usuario(id,nombre_usuario,password,id_estado_usuario,correo)
            VALUES (default, :nombre_usuario,:password,1,:correo)");
            //            VALUES (default, :nombre_usuario,:password,1,:fecha_creacion,:correo");
//valores que tienen uso de :variable  
  $sentencia->bindParam(":nombre_usuario",$usuario);
  $sentencia->bindParam(":password",$password);
  //fecha de creacio
  $sentencia->bindParam(":correo",$correo);

  $sentencia->execute();
  header("Location:index.php");
}  
?>

  <header>
  <?php include("../../vista/header.php"); ?>

  </header>

  <main class="container">

  <br/>

  <div class="card">
    <div class="card-header">
        Datos del Usuarios
    </div>
    <div class="card-body">
        <form action="" method="post" enclype="multipart/form-data">

        <div class="mb-3">
          <label for="usuario" class="form-label">Nombre del usuario:</label>
          <input type="text"
            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del usuario">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password"
            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba su contraseña">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input type="email"
            class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingrese su correo">
        </div>


        <button type="submit" class="btn btn-success">Agregar</button>

        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted"> </div>
  </div>

  </main>

  <footer>
  <?php include("../../vista/footer.php"); ?>

  </footer>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>