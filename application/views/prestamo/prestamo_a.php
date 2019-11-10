<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Sistema de Registro de Proyectores</h1>
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

							<!-- <div class="card-tools">
              <span class="badge badge-danger">8 New Members</span>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div> -->
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<?php
            foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<?php if ($proyectores['status'] == 0 && $proyectores['depto'] == 'Academico') { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="<?php echo $proyectores['clave'] ?>"></button>
									<!-- <a class="users-list-name" href="#"> -->
										<span class="users-list-name" style="font-weight: bold;"> <?php echo $proyectores['clave'] ?></span>
									<!-- </a> -->
								</li>
								<?php }
              }
              ?>
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.card-body -->
						<!-- /.card-footer -->
					</div>
					<!--/.card -->

				</div>
				<div class="col-lg-6">
					<!-- USERS LIST -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title" style="font-weight: bold;">Proyectores en uso</h3>

							<!-- <div class="card-tools">
              <span class="badge badge-danger">8 New Members</span>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div> -->
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<?php
            foreach ($proyector as $proyectores) { ?>
							<ul class="users-list clearfix">
								<?php if ($proyectores['status'] == 1 && $proyectores['depto'] == 'Academico') { ?>
								<li>
									<button class="btn btn-default" type="button" name="button"><img style="border-radius: 0%;" src="<?php echo base_url();?>assets/dist/img/cañon.jpg" alt="User Image"></button>
									<!-- <a class="users-list-name" href="#"> -->
										<span class="users-list-name" style="font-weight: bold;"> <?php echo $proyectores['clave'] ?></span>
									<!-- </a> -->
								</li>
								<?php }
              }
              ?>
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.card-body -->
						<!-- /.card-footer -->
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
