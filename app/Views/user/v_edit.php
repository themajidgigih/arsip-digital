<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b><?= $title ?></b></h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <?php echo form_open_multipart('user/update/'.$user['id_user']); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama_user" value="<?= $user['nama_user'] ?>" class="form-control" placeholder="Masukkan nama">
                            </div>
                        </div>
                            
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="Masukkan email" readonly>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" value="<?= $user['password'] ?>" class="form-control" placeholder="Masukkan password">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="<?= $user['level'] ?>">
                                        <?php if ($user['level'] == 1) {
                                            echo 'SuperAdmin';
                                        } elseif ($user['level'] == 2) {
                                            echo 'Admin';
                                        } else {
                                            echo 'Staf';
                                        }?>
                                        
                                    </option>
                                    <option value="1">SuperAdmin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Staf</option>
                                </select>
                            </div>
                        </div>
                            
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departemen</label>
                                <select name="id_dep" class="form-control">
                                    <option value="<?= $user['id_dep'] ?>"><?= $user['nama_dep'] ?></option>
                                    <?php foreach ($dep as $key => $value) { ?>
                                        <option value="<?= $value['id_dep'] ?>"><?= $value['nama_dep'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Foto User</label>
                                <div><img src="<?= base_url('foto/'.$user['foto']) ?>" width="100px"></div>
                                
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="exampleInputFile">Ganti Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="form-control" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                        <a href="<?= base_url('user') ?>" class="btn btn-default float-right">Kembali</a>
                    </div>

                    <?php echo form_close(); ?>

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>