
<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Empleados</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/header_footer.css">

</head>

<body>
<?php
include("../../config.php");
if($_POST){
  //recoleccion de datos mediante post
   $primernombre=(isset($_POST["primernombre"])?$_POST["primernombre"]:"");
   $segundonombre=(isset($_POST["segundonombre"])?$_POST["segundonombre"]:"");
   $primerapellido=(isset($_POST["primerapellido"])?$_POST["primerapellido"]:"");
   $segundoapellido=(isset($_POST["segundoapellido"])?$_POST["segundoapellido"]:"");
   $cedula=(isset($_POST["cedula"])?$_POST["cedula"]:"");
   $edad=(isset($_POST["edad"])?$_POST["edad"]:"");

   $foto=(isset($_FILES["foto"]["name"])?$_FILES["foto"]["name"]:"");
   $cv=(isset($_FILES["CV"]["name"])?$_FILES["CV"]["name"]:"");

   $idpuestos=(isset($_POST["idpuestos"])?$_POST["idpuestos"]:"");
   $fechadeingreso=(isset($_POST["fechadeingreso"])?$_POST["fechadeingreso"]:"");
   $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");

   
   //preparar la inserccion de los datos
   $sentencia=$conexion->prepare("INSERT INTO empleado(id,nombre_usuario,password,id_estado_usuario,correo)
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

  $sentencia=$conexion->prepare("SELECT * FROM puesto");
  $sentencia->execute();
  $listar_puestos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
  <header>
  <?php include("../../vista/header.php"); ?>

  </header>

  <main class="container">

  <br/>
  <div class="card">
    <div class="card-header">
        Datos del aplicante
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="primernombre" class="form-label">primer nombre</label>
          <input type="text"
            class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="primer nombre">
        </div>

        <div class="mb-3">
          <label for="segundonombre" class="form-label">segundo nombre</label>
          <input type="text"
            class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="segundo nombre">
        </div>

        <div class="mb-3">
          <label for="primerapellido" class="form-label">primer apellido</label>
          <input type="text"
            class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="primer apellido">
        </div>

        <div class="mb-3">
          <label for="segundoapellido" class="form-label">segundo apellido</label>
          <input type="text"
            class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="segundo apellido">
        </div>

        <div class="mb-3">
          <label for="numerocedula" class="form-label">numero cedula</label>
          <input type="text"
            class="form-control" name="numerocedula" id="numerocedula" aria-describedby="helpId" placeholder="numero de cedula">
        </div>

        <div class="mb-3">
          <label for="edad" class="form-label">Edad</label>
          <input type="text"
            class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Ingrese su edad">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Fotos</label>
          <input type="file"
            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="foto">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">CV(PDF):</label>
          <input type="text"
            class="form-control" name="CV" id="CV" aria-describedby="helpId" placeholder="(opcional)">
        </div>

        <div class="mb-3">
            <label for="idpuestos" class="form-label">Puestos:</label>

            <select class="form-select form-select-sm" name="idpuestos" id="idpuestos">
              <?php foreach($listar_puestos as $registro) {?>
              <option value="<?php echo $registro["id"]?>">
              <?php echo $registro["nombredelpuesto"]?></option>
              <?php } ?>
            </select>

        </div>

        <div class="mb-3">
          <label for="fechadeingreso" class="form-label">Fecha de ingreso:</label>
          <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">        
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">N° de Telefono:</label>
          <input type="text"
            class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese su n° de telefono">
        </div>

        <button type="submit" class="btn btn-success">Agregar registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>


    </div>
    <div class="card-footer text-muted"></div>

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