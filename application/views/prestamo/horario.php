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
  <!-- Aqui en contenido -->
  <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Horario</b></h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              
              <th>#</th>
              <th>Aula</th>
              <th>Grupo</th>
              <th>Hora inicio</th>
              <th>Hora final</th>
              <th>Materia</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
        foreach ($horarios as $horario) { ?>
        <tr>
            <td><?php echo  $i++; ?></td>
            <td><?php echo $horario['aula'] ?></td>
            <td><?php echo $horario['grupo'] ?></td>
            <td><?php echo $horario['hora_inicial'] ?></td>
            <td><?php echo $horario['hora_final'] ?></td>
            <td><?php echo $horario['materia'] ?></td>
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
