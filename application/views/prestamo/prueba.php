<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Prueba</title>
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/miestilo.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
			<!-- <div class="container"> -->
			<!-- <a href="#" class="navbar-brand"> -->
			<img src="<?php echo base_url();?>/img/Logo-TNM.png" alt="TNM" class="logo2" style="opacity: .9">
			<img src="<?php echo base_url();?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="logo" style="opacity: .9">
			<span class="titulo">
				<h3>Instituto Tecnologico de Tuxtepec</h3>
			</span>
			<!-- </a> -->
			<!-- </div> -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown user-menu">
					<a href="<?php echo base_url();?>loginA/logout" class="nav-link dropdown-toggle">
						<span class="d-none d-md-inline" style="color: #fff; font-weight: bold;">Cerrar sesión</span>
					</a>
				</li>
			</ul>
    </nav>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sistema de Registro de Proyectores</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    
                    <span class="text-bold text-lg">Disponibles</span>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <tbody>
                      <?php
                      foreach ($pro as $key => $proyectores) { ?>
                      <?php if ($proyectores->status == 0) { ?>
                          <td>
                          <a href="#" class="btn btn-light"
                              data-toggle="modal" 
                              data-target="#proyectorModal" 
                              data-id="<?php echo $proyectores->idproyector; ?>"
                              data-name="<?php echo $proyectores->clave; ?>">
                              <?php echo $proyectores->clave;?> </a>
                          </td>
                          <?php } ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <span class="text-bold text-lg">No disponibles</span>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <tbody>
                      <?php
                      foreach ($pro as $key => $proyectores) { ?>
                      <?php if ($proyectores->status == 1) { ?>
                          <td>
                          <a href="#" class="btn btn-light"
                              data-toggle="modal" 
                              data-target="#proyectorModal" 
                              data-id="<?php echo $proyectores->idproyector; ?>"
                              data-name="<?php echo $proyectores->clave; ?>">
                              <?php echo $proyectores->clave;?> </a>
                          </td>
                          <?php } ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->

              <!-- Modal -->
              <div class="modal fade" id="proyectorModal" tabindex="-1" role="dialog" aria-labelledby="proyectorModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="proyectorModalLabel">
                      Selecione materia en la que desea utilizar <span></span>:
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <!-- Aqui debe de ir el horario -->
                      <div class="container">
                        <table class="table table-bordered table-sm">
                          <thead class="table-dark">
                            <tr>
                              <th><?php echo date("l"); ?></th>
                              <th>Hora</th>
                              <th>Opción</th>
                            </tr>
                          </thead>
                          <tbody id="contenido">
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
    <!-- /.content -->
    </div>