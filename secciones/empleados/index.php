<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Empleados</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header_footer.css">

</head>

<body>
  <header>
  <?php include("../../vista/header.php"); ?>

  </header>

  <main class="container">

  <br/>

  <h4>Empleados</h4>

  <div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar Registro
    </a>

    </div>
    <div class="card-body">
        
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CV</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                    <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a> 
                    |<a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                    |<a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
                </tr>
               
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