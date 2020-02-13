<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm">
          <h1 class="m-0 text-dark"><b>Sistema de registro de proyectores</b></h1>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
  <div class="card card">
  <div class="card-header">
    <h3 class="card-title"><b>Lista de proyectores</b></h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Clave</th>
        <th>Marca</th>
        <th>Opciones</th>
      </tr>
      </thead>
      <tbody>
        <?php
        foreach ($proyector as $proyectores ) { ?>
        <tr>
            <td><?php echo $proyectores['clave'] ?></td>
            <td><?php echo $proyectores['marca'] ?></td>
            <td>
              <div class="btn-group">
                <a href="<?php echo base_url();?>admin/guardar/<?php echo $proyectores['idproyector']; ?>" class="btn btn-warning"><span class="far fa-edit"></span></a>
                <a href="<?php echo base_url();?>admin/borrar/<?php echo $proyectores['idproyector']; ?>" class="btn btn-danger"><span class="far fa-trash-alt"></span></a>
              </div>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
</section>
</div>
