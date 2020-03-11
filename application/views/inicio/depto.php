<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ITTUX</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style2.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</head>
<body class="body">
	<div class="card card-container">
		<h3>Elija el departamento:</h3>
		<a href="<?php echo base_url();?>loginC"><img class="profile-img-card" src="<?php echo base_url(); ?>/img/computo.png" alt=""></a>
		<span>Computo</span>
		<a href="<?php echo base_url();?>loginA"><img class="profile-img-card" src="<?php echo base_url(); ?>/img/academico.png" alt=""></a>
		<span>Academico</span>
	</div>

	<!-- <form action="<?php echo base_url();?>login1" method="post">
		<div class="card card-container">
		<h3>Elija el departamento:</h3>
			<button class="boton" type="submit" name="computo" id="computo">
				<img class="profile-img-card" src="<?php echo base_url(); ?>/img/computo.png" alt="">
			</button>
			<span>Computo</span>
			<button class="boton" type="submit" name="academico" id="academico">
				<img class="profile-img-card" src="<?php echo base_url(); ?>/img/academico.png" alt="">
			</button>
			<span>Academico</span>
		</div>
	</form> -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/auth/login.js'); ?>"></script>
</body>
</html>
