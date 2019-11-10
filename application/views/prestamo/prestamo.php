<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Sistema de Registro de Proyectores</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title" style="font-weight: bold;">Proyectores disponibles</h3>
						</div>
						<div class="card-body p-0">
							<?php
            foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<!-- Muestra los proyectores disponibles -->
								<?php if ($proyectores['status'] == 0) { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="<?php echo $proyectores['clave'] ?>"></button>
									<!-- <a class="users-list-name" href="#"> -->
									<span class="users-list-name" style="font-weight: bold;">
										<?php echo $proyectores['clave'] ?></span>
									<!-- </a> -->
								</li>
								<?php }
              }
              ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title" style="font-weight: bold;">Proyectores en uso</h3>
						</div>
						<div class="card-body p-0">
							<?php
            foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<!-- Muestra los proyectores no disponibles -->
								<?php if ($proyectores['status'] == 1) { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="User Image"></button>
									<!-- <a class="users-list-name" href="#"> -->
									<span class="users-list-name" style="font-weight: bold;">
										<?php echo $proyectores['clave'] ?></span>
									<!-- </a> -->
								</li>
								<?php }
              }
              ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
