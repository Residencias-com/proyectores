<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url();?>/assets/#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
<!-- Aqui va la minuatura xD -->
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown user-menu">
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
    <img src="<?php echo base_url();?>/img/admin.png" class="user-image img-circle" alt="User Image">
    <span class="d-none d-md-inline"> <?php echo $this->session->userdata('name') ?> </span>
  </a>
  <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <!-- User image -->
    <li class="user-header bg-primary">
      <img src="<?php echo base_url();?>/img/admin.png" class="img-circle" alt="User Image">

      <p>
        Administrador
      </p>
    </li>
    <!-- Menu Body -->
    <!-- Menu Footer-->
    <li class="user-footer">
      <a href="<?php echo base_url();?>/login/logout" class="btn btn-default btn-flat float-right">Cerrar sesión</a>
    </li>
  </ul>
</li>
</ul>
    </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url();?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">ITTUX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
            <i class="fas fa-bars nav-icon"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin" class="nav-link">
                <i class="fas fa-home nav-icon" ></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/guardar" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Insertar proyector</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/listar_proyector" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Listar proyectores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/add_user" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i>
                  <p>Registrar usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-chart-bar nav-icon"></i>
                  <p>Mostrar gráficas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  </div>
