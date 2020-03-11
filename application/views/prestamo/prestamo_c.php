<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>AdminLTE 3 | Top Navigation</title>
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
					<a href="<?php echo base_url();?>loginC/logout" class="nav-link dropdown-toggle">
						<span class="d-none d-md-inline" style="color: #fff; font-weight: bold;">Cerrar sesión</span>
					</a>
				</li>
			</ul>
		</nav>
		
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Sistema de registro de proyectores</h1><br>
					<h5>Bienvenido <?php echo $this->session->userdata('nombre'),' ',$this->session->userdata('apellidos')?></h5>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<!-- USERS LIST -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title" style="font-weight: bold;">Proyectores disponibles</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<?php
            				foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<?php if ($proyectores['status'] == 0 && $proyectores['depto'] == 'Computo') { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="<?php echo $proyectores['clave'] ?>"></button>
									<a class="users-list-name" href="#">
										<?php echo $proyectores['clave'] ?>
									</a>
								</li>
								<?php }
              				}
              				?>
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.card-body -->
					</div>
					<!--/.card -->
				</div>

				<div class="col-lg-6">
					<!-- USERS LIST -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title" style="font-weight: bold;">Proyectores en uso</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<?php
            				foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<?php if ($proyectores['status'] == 1 && $proyectores['depto'] == 'Computo') { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="User Image"></button>
									<a class="users-list-name" href="#">
										<?php echo $proyectores['clave'] ?></a>
								</li>
								<?php }
              				}
              				?>
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.card-body -->
					</div>
					<!--/.card -->
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
</div>
