<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Data <?= $title ?></b></h3>

          <div class="card-tools">
            <a href="<?= base_url('user/add') ?>" class="btn btn-sm btn-primary" data-target="#add">
              <i class="fas fa-plus"></i> Tambah <?= $title ?>
            </a>
          </div>
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
            <thead>
              <tr>
                <th width="10">#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Departemen</th>
                <th width="100px"><i class="fas fa-cog"></i></th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($user as $key => $value) { ?>
                  <tr>
                    <td> <?= $no++; ?> </td>
                    <td> <?= $value['nama_user']; ?> </td>
                    <td> <?= $value['email']; ?> </td>
                    <td> 
                      <?php if ($value['level']==1) {
                      echo 'SuperAdmin';
                      } elseif ($value['level'] == 2) {
                            echo 'Admin';
                      }else {
                      echo 'Staf';
                      }
                      /* switch ($value['level']) {
                        case "1":
                          echo "SuperAdmin";
                          break;
                        case "2":
                          echo "Admin";
                          break;
                        case "3":
                          echo "Tamu";
                          break;
                      } */
                       ?> 
                    </td>
                    <td> <?= $value['nama_dep']; ?> </td>
                    <td>
                      <a href="<?= base_url('user/lihat/'.$value['id_user']) ?>" class="btn btn-sm btn-info" title="Lihat"><i class="fa fa-folder-open"></i></a>
                      <a href="<?= base_url('user/edit/'.$value['id_user']) ?>" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                      <?php if ($value['level']==1) { ?>
                        <!-- jika tampil data user SuperAdmin maka tombol hapus tidak muncul -->
                      <?php } else { ?>
                        <!-- jika tampil data user Admin/Staf maka tombol hapus muncul -->
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_user']; ?>" title="Hapus"><i class="fa fa-trash"></i></button>
                      <?php } ?>
                    </td>
                  </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>  

<!-- /.modal hapus user-->
<?php foreach ($user as $key => $value) { ?>
  <div class="modal fade" id="delete<?= $value['id_user']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus <?= $title ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus <b>User <?= $value['nama_user']; ?> </b> ?
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <a href="<?= base_url('user/delete/'.$value['id_user']) ?>"  type="submit" class="btn btn-danger">Ya</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php } ?>