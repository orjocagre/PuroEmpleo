<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Puestos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header_footer.css">

</head>

<body>
<?php include("../../config.php");

if($_POST){
  //recoleccion de datos mediante post
   $nombredelpuesto=(isset($_POST["nombredelpuesto"])?$_POST["nombredelpuesto"]:"");
   //preparar la inserccion de los datos
   $sentencia=$conexion->prepare("INSERT INTO puesto(id,nombredelpuesto)
            VALUES (default, :nombredelpuesto)");
   //asignacion de valores que vienen de post(formukario)
  $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
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
        Puestos
    </div>
    <div class="card-body">
        <form action="" method="post" enclype="multipart/form-data">

        <div class="mb-3">
          <label for="nombredelpuesto" class="form-label">nombre de puesto:</label>
          <input type="text"
            class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del puesto">
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