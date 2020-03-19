<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sistema de registro de proyectores</h1>
        </div>
        <!-- /.container-fluid -->
      </div>
  </section>

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Usuario</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form id="login" action="<?php base_url();?>insert_user" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nombre de Usuario</label>
                    <input type="text" name="user" class="form-control" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Registrar" >
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>