<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Data <?= $title ?></b></h3>

          <!-- jika admin tampilkan tombol tambah arsip -->
          <?php if (session()->level==1): ?>

          <div class="card-tools">
            <a href="<?= base_url('arsip/add') ?>" class="btn btn-sm btn-primary" data-target="#add">
              <i class="fas fa-plus"></i> Tambah <?= $title ?>
            </a>
          </div>
          <?php endif ?>

          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <?php 
            if (session()->getFlashdata('pesan')) {
              echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>';
              echo session()->getFlashdata('pesan');
              echo '</div>';
            }
          ?>

          <table id="example1" class="table table-bordered">
            
            <!-- jika SuperAdmin/Admin tampilkan: -->
            <?php if ((session()->level==1) || (session()->level==2)) { ?>

              <thead>
                <tr>
                  <th width="10">#</th>
                  <th>No Arsip</th>
                  <th>Arsip</th>
                  <th>Kategori</th>
                  <th>Upload</th>
                  <th>Update</th>
                  <th>Pengupload</th>
                  <th>Departemen</th>
                  <th width="100px"><i class="fas fa-cog"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                  foreach ($arsip as $key => $value) { ?>
                  <tr>
                    <td> <?= $no++; ?> </td>
                    <td> <?= $value['no_arsip']; ?> </td>
                    <td> <?= $value['nama_arsip']; ?> </td>
                    <td> <?= $value['nama_kategori']; ?> </td>
                    <td> <?= $value['tgl_upload']; ?> </td>
                    <td> <?= $value['tgl_update']; ?> </td>
                    <td> <?= $value['nama_user']; ?> </td>
                    <td> <?= $value['nama_dep']; ?> </td>
                    <td>
                      <a href="<?= base_url('arsip/viewpdf/'.$value['id_arsip']) ?>" class="btn btn-sm btn-info"><i class="fa fa-folder-open" title="Lihat"></i></a>
                      <a href="<?= base_url('arsip/edit/'.$value['id_arsip']) ?>" class="btn btn-sm btn-success"><i class="fa fa-edit" title="Edit"></i></a>
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_arsip']; ?>" title="Hapus"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
  
            <!-- jika Tamu tampilkan: -->
            <?php } else { ?>

              <thead>
                <tr>
                  <th width="10">#</th>
                  <th>No Arsip</th>
                  <th>Arsip</th>
                  <th>Kategori</th>
                  <th>Upload</th>
                  <th>Update</th>
                  <th>Pengupload</th>
                  <th>Departemen</th>
                  <th><i class="fas fa-cog"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                  foreach ($arsip as $key => $value) { ?>
                  <tr>
                    <td> <?= $no++; ?> </td>
                    <td> <?= $value['no_arsip']; ?> </td>
                    <td> <?= $value['nama_arsip']; ?> </td>
                    <td> <?= $value['nama_kategori']; ?> </td>
                    <td> <?= $value['tgl_upload']; ?> </td>
                    <td> <?= $value['tgl_update']; ?> </td>
                    <td> <?= $value['nama_user']; ?> </td>
                    <td> <?= $value['nama_dep']; ?> </td>
                    <td>
                      <a href="<?= base_url('arsip/viewpdf/'.$value['id_arsip']) ?>" class="btn btn-sm btn-info"><i class="fa fa-folder-open" title="Lihat"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>

              <?php } ?>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>

<!-- /.modal hapus arsip-->
<?php foreach ($arsip as $key => $value) { ?>
  <div class="modal fade" id="delete<?= $value['id_arsip']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus <?= $title ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus <b>Arsip <?= $value['nama_arsip']; ?> </b> ?
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <a href="<?= base_url('arsip/delete/'.$value['id_arsip']) ?>"  type="submit" class="btn btn-danger">Ya</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php } ?>