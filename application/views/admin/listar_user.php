<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sistema de registro de proyectores</h1>

        </div><!-- /.container-fluid -->
      </div>
  </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Title</b></h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
        foreach ($personal as $personal) { ?>
        <tr>
            <td><?php echo  $i++; ?></td>
            <td><?php echo $personal['nombre_empleado'] ?></td>
            <td><?php echo $personal['apellidos_empleado'] ?></td>
            <td><?php echo $personal['correo_electronico'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
