<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style2.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/all.min.js"></script>
</head>
<body class="body">
	<form class="" action="<?php echo base_url();?>prestamo/prestamo" method="post">
		<div class="card card-container">
			<h3>Elija el depto:</h3>
				<button class="boton" value="computo" type="submit" name="computo"><img class="profile-img-card" src="<?php echo base_url(); ?>/img/computo.png" alt=""></button>
				<span>Computo</span>
				<button class="boton" value="academico" type="submit" name="academico"><img class="profile-img-card" src="<?php echo base_url(); ?>/img/academico.png" alt=""></button>
				<span>Academico</span>
	  </div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/jQuery-3.4.1.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.map'); ?>"></script>
	<script src="<?php echo base_url('assets/js/auth/login.js'); ?>"></script>
</body>
</html>
