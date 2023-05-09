<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres</label>
        <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
    </div>
    
    <div class="mb-3">
      <label for="apellido" class="form-label">Apellidos</label>
      <input type="text"
        class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Foto</label>
      <input type="file"
        class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
    </div>

    <div class="mb-3">
      <label for="cv" class="form-label">CV (PDF):</label>
      <input type="file"
        class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV" aria-describedby="fileHelpId">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Puesto:</label>
        <select class="form-select form-select-lg" name="" id="">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Fecha de Ingreso:</label>
      <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="abc@mail.com">
    </div>
    
    <button type="submit" class="btn btn-success">Agregar registro</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>
    
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>