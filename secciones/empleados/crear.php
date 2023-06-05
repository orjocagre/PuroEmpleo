<?php include("../../templates/header.php"); ?>

<br/>
<div class="card">
    <div class="card-header">
        Datos del aplicante
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="primernombre" class="form-label">primer apellido</label>
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
            class="form-control" name="CV" id="CV" aria-describedby="helpId" placeholder="CV">
        </div>

        <div class="mb-3">
            <label for="idpuestos" class="form-label">Puestos:</label>
            <select class="form-select form-select-sm" name="idpuestos" id="idpuestos">
                <option selected>Select one</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="fechadeingreso" class="form-label">Fecha de ingreso:</label>
          <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">        
        </div>

        <button type="submit" class="btn btn-success">Agregar registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>


    </div>
    <div class="card-footer text-muted"></div>

</div>

<?php include("../../templates/footer.php"); ?>