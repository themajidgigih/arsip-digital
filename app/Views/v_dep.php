<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Data <?= $title ?></b></h3>

          <!-- jika admin tampilkan: -->
          <?php if (session()->level==1): ?>

          <div class="card-tools">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add">
              <i class="fas fa-plus"></i> Tambah <?= $title ?>
            </button>
          </div>
          <!-- /.card-tools -->

          <?php endif ?>

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
                <th width="10x">#</th>
                <th>Departemen</th>

                <!-- jika SuperAdmin/Admin tampilkan: -->
                <?php if ((session()->level==1) || (session()->level==2)): ?>
                <th width="60px"><i class="fas fa-cog"></i></th>
                <?php endif ?>
                
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($dep as $key => $value) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $value['nama_dep']; ?></td>

                      <!-- jika SuperAdmin/Admin tampilkan: -->
                      <?php if ((session()->level==1) || (session()->level==2)): ?>
                      <td>
                        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?= $value['id_dep']; ?>" title="Edit" ><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_dep']; ?>" title="Hapus" ><i class="fa fa-trash"></i></button>
                      </td>
                      <?php endif ?>

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

<!-- /.modal tambah dep-->
<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah <?= $title ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open('dep/add') ?>

        <div class="form-group">
          <label>Departemen</label>
          <input name="nama_dep" class="form-control" placeholder="Masukkan departemen" required>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      
      <?php echo form_close() ?>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal edit dep-->
<?php foreach ($dep as $key => $value) { ?>
  <div class="modal fade" id="edit<?= $value['id_dep']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit <?= $title ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open('dep/edit/'.$value['id_dep']) ?>

          <div class="form-group">
            <label>Departemen</label>
            <input name="nama_dep" value="<?= $value['nama_dep']; ?>" class="form-control" placeholder="Masukkan departemen" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        
        <?php echo form_close() ?>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php } ?>

<!-- /.modal hapus dep-->
<?php foreach ($dep as $key => $value) { ?>
  <div class="modal fade" id="delete<?= $value['id_dep']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus <?= $title ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus <b>Departemen <?= $value['nama_dep']; ?> </b> ?
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <a href="<?= base_url('dep/delete/'.$value['id_dep']) ?>"  type="submit" class="btn btn-danger">Ya</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php } ?>