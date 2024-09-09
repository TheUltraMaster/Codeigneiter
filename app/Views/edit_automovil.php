<!DOCTYPE html>
<html>

<head>
  <title>CodeIgniter 4 CRUD - Edit Automóvil Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="update_automovil" name="update_automovil" action="<?= site_url('/update-automovil') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $automovil['id']; ?>">

      <div class="form-group">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control" value="<?php echo $automovil['modelo']; ?>">
      </div>

      <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control" value="<?php echo $automovil['color']; ?>">
      </div>

      <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" value="<?php echo $automovil['marca']; ?>">
      </div>

      <div class="form-group">
        <label>Linea</label>
        <input type="text" name="linea" class="form-control" value="<?php echo $automovil['linea']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_automovil").length > 0) {
      $("#update_automovil").validate({
        rules: {
          modelo: {
            required: true,
          },
          color: {
            required: true,
          },
          marca: {
            required: true,
          },
          linea: {
            required: true,
          },
        },
        messages: {
          modelo: {
            required: "Modelo es requerido.",
          },
          color: {
            required: "Color es requerido.",
          },
          marca: {
            required: "Marca es requerida.",
          },
          linea: {
            required: "Línea es requerida.",
          },
        },
      });
    }
  </script>
</body>

</html>
