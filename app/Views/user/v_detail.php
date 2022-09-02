<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-primary">
                    <!--<h4 class="box-title">Detail Data <b><?= $user['nama_user'] ?></b></h4>-->
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="<?= base_url('foto/'.$user['foto']) ?>">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username"><?= $user['nama_user'] ?></h3>
                    <h5 class="widget-user-desc">
                        <?php if ($user['level'] == 1) {
                            echo 'SuperAdmin';
                        } elseif ($user['level'] == 2) {
                            echo 'Admin';
                        } else {
                            echo 'Staf';
                        } ?>
                    </h5>
                </div>
                <div class="card-footer p-0">
                    <table class="table">
                        <tr>
                            <th width="50">Email</th>
                            <th width="20">:</th>
                            <td><?= $user['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <th>:</th>
                            <td><?= $user['password'] ?></td>
                        </tr>
                        <tr>
                            <th>Departemen</th>
                            <th>:</th>
                            <td><?= $user['nama_dep'] ?></td>
                        </tr>
                    </table>
                    <div class="card-footer">
                    <a href="<?= base_url('user') ?>" class="btn btn-default" title="Kembali">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
