<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title ?> <b><?= $arsip['nama_arsip'] ?></b></h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th width="200">No Arsip</th>
                            <th width="20">:</th>
                            <td><?= $arsip['no_arsip'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Arsip</th>
                            <th>:</th>
                            <td><?= $arsip['nama_arsip'] ?></td>
                        </tr>
                        <tr>
                            <th>Kategori / Departemen</th>
                            <th>:</th>
                            <td><?= $arsip['nama_kategori'] ?> / <?= $arsip['nama_dep'] ?></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <th>:</th>
                            <td><?= $arsip['deskripsi'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Upload / Update</th>
                            <th>:</th>
                            <td><?= $arsip['tgl_upload'] ?> / <?= $arsip['tgl_update'] ?></td>
                        </tr>
                        <!-- <tr>
                            <th>Ukuran File</th>
                            <th>:</th>
                            <td><?= $arsip['ukuran_file'] ?> Byte</td>
                        </tr> -->
                        <tr>
                            <th>Diupload oleh</th>
                            <th>:</th>
                            <td><?= $arsip['nama_user'] ?></td>
                        </tr>
                    </table>

                    <embed type="application/pdf" src="<?= base_url('file_arsip/'.$arsip['file_arsip']) ?>" width="100%" height="800"></embed>

                </div>

                <div class="card-footer">
                    <a href="<?= base_url('arsip') ?>" class="btn btn-default" title="Kembali">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>    