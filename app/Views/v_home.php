<div class="container-fluid">
  <div class="row">

    <!-- jika SuperAdmin maka tampilkan: -->
    <?php if (session()->level==1) { ?>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?= $tot_arsip ?></h3>
          <p>Arsip</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-pdf"></i>
        </div>
        <a href="<?= base_url('arsip') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $tot_kategori ?></h3>
          <p>Kategori</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="<?= base_url('kategori') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $tot_departemen ?></h3>
          <p>Departemen</p>
        </div>
        <div class="icon">
          <i class="fa fa-building"></i>
        </div>
        <a href="<?= base_url('dep') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3><?= $tot_user ?></h3>
          <p>User</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="<?= base_url('user') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- jika Admin/Tamu maka tampilkan: -->
    <?php } else { ?>

    <div class="col-lg-4 col-12">
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?= $tot_arsip ?></h3>
          <p>Arsip</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-pdf"></i>
        </div>
        <a href="<?= base_url('arsip') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $tot_kategori ?></h3>
          <p>Kategori</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="<?= base_url('kategori') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $tot_departemen ?></h3>
          <p>Departemen</p>
        </div>
        <div class="icon">
          <i class="fa fa-building"></i>
        </div>
        <a href="<?= base_url('dep') ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <?php } ?>

  </div>
</div>