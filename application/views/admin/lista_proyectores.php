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
        foreach ($proyector as $key => $p ) { ?>
        <tr>
            <td><?php echo $p->clave ?></td>
            <td><?php echo $p->marca ?></td>
            <td>
              <div class="btn-group">
                <a href="<?php echo base_url();?>admin/guardar/<?php echo $p->idproyector; ?>" class="btn btn-warning"><span class="far fa-edit"></span></a>
                <a href="#" class="btn btn-danger" 
                data-toggle="modal" 
                data-target="#deleteProyector" 
                data-id="<?php echo $p->idproyector; ?>"
                data-name="<?php echo $p->clave; ?>">
                <span class="far fa-trash-alt"></span></a>
              </div>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="deleteProyector" tabindex="-1" role="dialog" aria-labelledby="deleteProyectorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteProyectorLabel">
          ¿Seguro que deseas borrar el proyector <span></span>?
          
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="b-borrar">Borrar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- /.card-body -->
</div>
</section>
</div>
