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

if (isset($_GET["txtID"])) {
  $txtID=(isset($_GET["txtID"]))?$_GET["txtID"]:"";

  $sentencia=$conexion->prepare("DELETE FROM usuario WHERE id=:id");
  $sentencia->bindParam(":id",$txtID);
  $sentencia->execute();
  header("Location:index.php");
}

$sentencia=$conexion->prepare("SELECT * FROM usuario");
$sentencia->execute();
$listar_usuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

  <header>
  <?php include("../../vista/header.php"); ?>

  </header>

  <main class="container">

  </br>

  <div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar Usuario
    </a>
    </div>
    <div class="card-body">

    <div class="table-responsive sm">
    <table class="table">
        <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          
        <?php foreach($listar_usuarios as $registro) {?>
            <tr class="">
                <td scope="row"><?php echo $registro["id"]; ?></td>
                <td><?php echo $registro["nombre_usuario"]; ?></td>
                <td>*******</td>
                <td><?php echo $registro["correo"]; ?></</td>

            <td>
                <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro["id"]; ?>" role="button">Editar</a>
                |
                <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro["id"]; ?>" role="button">Eliminar</a>
            </td>
            </tr>
           
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
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