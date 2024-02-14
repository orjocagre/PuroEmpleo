<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio de Sesión</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/header_footer.css">

  <link rel="stylesheet" href="stylesN.css" type="text/css">

</head>

<body>

  <?php
  include("../config.php");
  require_once("../controlador/login_controlador.php");
  $controlador = new Login_Controlador();
  session_start();

  if ($_POST) {

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
    $password = (isset($_POST["password"])) ? $_POST["password"] : "";

    //seleccionar registros
    $sentencia = $conexion->prepare("SELECT COUNT(*)
    FROM usuario
    WHERE nombre_usuario=:usuario
    AND password=:password
    ");
    //asignacion de valores que vienen de post(formukario)
    $sentencia->bindParam(":usuario", $usuario);
    $sentencia->bindParam(":password", $password);
    $sentencia->execute();

    $lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);
    //$cantidad=['n_usuario'];

    if ($lista_usuarios['count'] > 0) {
      
      $sentencia = $conexion->prepare("SELECT usuario.id as id, usuario.nombre_usuario as nombre
    FROM usuario
    WHERE nombre_usuario=:usuario
    AND password=:password
    ");
      //asignacion de valores que vienen de post(formukario)
      $sentencia->bindParam(":usuario", $usuario);
      $sentencia->bindParam(":password", $password);
      $sentencia->execute();
      
      $lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);

      $_SESSION['usuario'] = $lista_usuarios['usuario'];
      $_SESSION['idU'] = $lista_usuarios['id'];
      $_SESSION['nomU'] = $lista_usuarios['nombre'];
      $_SESSION['logueado'] = true;
      $_SESSION['esfabrica'] = $controlador->esFabrica($_SESSION['idU']);
      header("Location: ../vista/principal.php");

    } else {
      $mensaje = "Error: El usuario o contraseña son incorrectos!";
    }
  }
  ?>


  <header>

  </header>

  <main>

    <div class="container">
      <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4">
          <br />
          <br />
          <?php if (isset($mensaje)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong><?php echo $mensaje; ?></strong>
            </div>
          <?php } ?>
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="container__header">

        <div class="logo">
            <a href="./principal.php">
              <img src="../assets/img/logo/tabacologo.png" alt="" width="360" height="100">
            </a>
        </div>

            <div class="card-body">

              <form action="" method="post">

                <h4>Que bueno que estas de vuelta!</h4>

                <div class="mb-3">
                  <label for="usuario" class="form-label">usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                </div>

                <input name="" id="" class="btn btn-primary" type="submit" value="Ingresar">

                <br />
                <br />

                <P> No tienes una cuenta? <a href="../register.php"> Registrate ahora! </a></P>

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