<?php
$input_user = array(
  'name'        => 'usuario',
  'id'          => 'usuario',
  'class'       => 'form-control',
  'placeholder' => 'Usuario',

);

$input_password = array(
  'name'        => 'contraseña',
  'id'          => 'contraseña',
  'class'       => 'form-control',
  'placeholder' => 'Contraseña'
);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div class="login-box">

  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
        <b>TNM</b>Ittux
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="<?php echo base_url();?>/assets/dist/img/AdminLTELogo.png" alt="ITTUX">
        </div>
      </div>
      <!-- /.login-logo -->
      <p class="login-box-msg">Inicia sesión</p>
  <?php echo form_open("login1/login"); ?>
        <div class="input-group mb-3">
          <?php echo form_input($input_user); ?>
          <!-- <input type="email" class="form-control" placeholder="Email"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_password($input_password); ?>
          <!-- <input type="password" class="form-control" placeholder="Password"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
                      
            <?php echo form_submit('loginC','LoginC',['class' => 'btn btn-primary btn-block btn-flat']); ?>
            <?php echo form_submit('loginA','LoginA',['class' => 'btn btn-primary btn-block btn-flat']); ?>
          
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>