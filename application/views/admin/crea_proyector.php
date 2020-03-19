<?php

    // $input_id = array(
    //   'name'        => 'idproyector',
    //   'id'          => 'idproyector',
    //   'value'       => $idproyector,
    //   'class'       => 'form-control',
    //   'placeholder' => 'ID',
    // );

    $input_clave = array(
      'name'        => 'clave',
      'id'          => 'clave',
      'value'       => $clave,
      'class'       => 'form-control',
      'placeholder' => 'Clave',
    );

    $input_marca = array(
      'name'        => 'marca',
      'id'          => 'marca',
      'value'       => $marca,
      'class'       => 'form-control',
      'placeholder' => 'Marca',
    );

    $input_modelo = array(
      'name'        => 'modelo',
      'id'          => 'modelo',
      'value'       => $modelo,
      'class'       => 'form-control',
      'placeholder' => 'Modelo',
    );

    $input_serie = array(
      'name'        => 'num_serie',
      'id'          => 'num_serie',
      'value'       => $num_serie,
      'class'       => 'form-control',
      'placeholder' => 'Número de serie',
    );

    $input_depto = array(
      'name'        => 'depto',
      'id'          => 'depto',
      'value'       => $depto,
      'class'       => 'form-control',
      'placeholder' => 'Departamento'
    );
    ?>

  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Sistema de registro de proyectores</h1>
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <section class="content">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>Insertar Proyector</b></h3>
          </div>
        <!-- <?php echo form_open('admin/guardar',['class' => 'form']); ?> -->
        <form action="<?php echo base_url();?>/admin/guardar" method="post">
        <div class="card-body">
          <!-- <div class="form-group">
            <?php echo form_label('ID:', 'id'); ?>
            <?php echo form_input($input_id); ?>
          </div> -->
          <div class="form-group">
            <?php echo form_label('Clave:', 'clave'); ?>
            <?php echo form_input($input_clave); ?>
          </div>
          <div class="form-group">
            <?php echo form_label('Marca:', 'marca'); ?>
            <?php echo form_input($input_marca); ?>
          </div>
          <div class="form-group">
            <?php echo form_label('Modelo:', 'modelo'); ?>
            <?php echo form_input($input_modelo); ?>
          </div>
          <div class="form-group">
            <?php echo form_label('Número de serie:', 'num_serie'); ?>
            <?php echo form_input($input_serie); ?>
          </div>
          <div class="form-group">
            <?php echo form_label('Departamento:', 'depto'); ?>
            <?php echo form_input($input_depto); ?>
          </div>
        </div>
        <div class="card-footer">
          <?php
					echo form_submit('inserta_proyector','Agregar',['class' => 'btn btn-success']);
  				?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
