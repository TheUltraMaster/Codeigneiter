<!DOCTYPE html>
<html>

<head>
  <title>CodeIgniter 4 Add/Edit Automovil</title>
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
    <h1><?php echo isset($automovil) ? 'Edit Automovil' : 'Add Automovil'; ?></h1>
    <form method="post" id="add_create" name="add_create" 
      action="<?= isset($automovil) ? site_url('/update-automovil') : site_url('/store-automovil') ?>">
      <?php if (isset($automovil)): ?>
        <input type="hidden" name="id" value="<?php echo $automovil['id']; ?>">
      <?php endif; ?>
      
      <div class="form-group">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control" value="<?= isset($automovil) ? $automovil['modelo'] : '' ?>" required>
      </div>

      <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control" value="<?= isset($automovil) ? $automovil['color'] : '' ?>" required>
      </div>

      <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" value="<?= isset($automovil) ? $automovil['marca'] : '' ?>" required>
      </div>

      <div class="form-group">
        <label>Línea</label>
        <input type="text" name="linea" class="form-control" value="<?= isset($automovil) ? $automovil['linea'] : '' ?>" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"><?= isset($automovil) ? 'Update Automovil' : 'Add Automovil' ?></button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
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
            required: "Marca es requerido.",
          },
          linea: {
            required: "Línea es requerido.",
          },
        },
      });
    }
  </script>
</body>

</html>
