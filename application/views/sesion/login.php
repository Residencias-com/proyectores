<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style2.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/all.min.js"></script>


</head>
<body>
  <?php echo validation_errors(); ?>
	<!-- Formulario login -->
	<!-- <div class="container"> -->
		<div class="card card-container">
		<img class="profile-img-card" src="<?php echo base_url(); ?>/assets/img/logo.png" alt="">
		<form action="<?php echo base_url('login/validate') ?>" method="POST" id="form_login">
	  <div class="form-group" id="username">
	    <label for="exampleInputEmail1">Usuario: </label>
	    <input type="text" name="username" class="form-control" id="user"  placeholder="Nombre de usuario">
			<div class="invalid-feedback">

			</div>
		</div>
	  <div class="form-group" id="password">
	    <label for="exampleInputPassword1">Contraseña: </label>
	    <input type="password" name="password" class="form-control" id="mail" placeholder="Contraseña">
			<div class="invalid-feedback">
			</div>
	  </div>
		<div class="form-group">
			<button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">Iniciar sesión</button>
			<br>
		</div>
		<div class="form-group" id="alert">

		</div>
		</form>
	</div>
	<!-- </div> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/auth/login.js'); ?>"></script>
</body>
</html>
