<!-- Sidebar -->
    <div class="sidebar">

<!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('foto/'.session()->get('foto')) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?= session()->get('nama_user') ?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-header">EXAMPLES</li> -->
          <li class="nav-item">
            <a href="<?= base_url('home') ?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('arsip') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Arsip
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('kategori') ?>" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('dep') ?>" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Departemen
              </p>
            </a>
          </li>

          <!-- jika SuperAdmin maka tampilkan halaman user -->
          <?php if (session()->level==1): ?>

          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <?php endif ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kelurahan Bantarsoka</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">ArsipDigital</li>
              <!-- <li class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></li> -->
              <li class="breadcrumb-item"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">