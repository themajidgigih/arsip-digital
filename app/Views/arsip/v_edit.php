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

                    <?php echo form_open_multipart('arsip/update/'.$arsip['id_arsip']); ?>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>No Arsip</label>
                                <input name="no_arsip" class="form-control" value="<?= $arsip['no_arsip']; ?>" readonly>
                            </div>
                        </div>
                            
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Arsip</label>
                                <input name="nama_arsip" class="form-control" value="<?= $arsip['nama_arsip']; ?>" placeholder="Masukkan nama arsip">
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    <option value="<?= $arsip['id_kategori']; ?>"><?= $arsip['nama_kategori']; ?></option>
                                    <?php foreach ($kategori as $key => $value) { ?>
                                        <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Masukkan deskripsi arsip" rows="5"><?= $arsip['deskripsi']; ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File Arsip</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file_arsip" class="form-control" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Arsip</label>
                            </div>
                        </div>
                        <label class="text-danger">*File harus berformat .pdf</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                        <a href="<?= base_url('arsip') ?>" class="btn btn-default float-right">Kembali</a>
                    </div>

                    <?php echo form_close(); ?>

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>