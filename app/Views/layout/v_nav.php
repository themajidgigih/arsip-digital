<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url() ?>/template/dist/img/logo-bms.png" alt="Logo Banyumas" height="100" width="100">
    <h3><b>Arsip</b>Digital</h3>
    <h5>Kelurahan Bantarsoka</h5>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('tentang') ?>" class="nav-link">Tentang</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('tutorial') ?>" class="nav-link">Tutorial</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Log Out Menu -->
      <li class="nav-item dropdown">
        <a href="<?= base_url('auth/logout') ?>" class="nav-link" data-toggle="tooltip" title="Log Out" href="#">
          <i class="fa fa-lock"></i> Log Out
        </a>
      </li>

      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" data-toggle="tooltip" title="Fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" data-toggle="tooltip" title="Customization" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> 
      -->

    </ul>
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('home') ?>" class="brand-link">
      <img src="<?= base_url() ?>/template/dist/img/logo-bms.png" alt="Logo" class="brand-image img-circle" style="opacity: 1">
      <span class="brand-text"><b>Arsip</b>Digital</span>
    </a>

    