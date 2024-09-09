<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CodeIgniter 4 - CRUD Básico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-4">
      <h1>CRUD Básico CodeIgniter</h1>

    </div>
    <div class="container mt-4">
      <div class="d-flex justify-content-end">
      <a href="<?php echo base_url('automovil-form'); ?>" class="btn btn-success mb-2">Agregar Automóvil</a>
      </div>
      <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-success">
          <?php echo session()->getFlashdata('msg'); ?>
        </div>
      <?php endif; ?>
      <div class="mt-3">
        <table class="table table-bordered" id="automoviles-list">
          <thead>
            <tr>
              <th>ID</th>
              <th>Modelo</th>
              <th>Color</th>
              <th>Marca</th>
              <th>Línea</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($automoviles): ?>
              <?php foreach ($automoviles as $automovil): ?>
                <tr>
                  <td><?php echo $automovil['id']; ?></td>
                  <td><?php echo $automovil['modelo']; ?></td>
                  <td><?php echo $automovil['color']; ?></td>
                  <td><?php echo $automovil['marca']; ?></td>
                  <td><?php echo $automovil['linea']; ?></td>
                  <td>
                    <a href="<?php echo base_url('edit-automovil/'.$automovil['id']); ?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="<?php echo base_url('delete-automovil/'.$automovil['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#automoviles-list').DataTable();
      });
    </script>
  </body>
</html>
