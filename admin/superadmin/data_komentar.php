<?php 
include "tglindo.php";
include "koneksi.php";
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="container-fluid">
                    <br>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Komentar</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Isi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sqlt = mysqli_query($koneksi, "select * from tbl_komentar");
                                        $no=1;
                                                while($dat = mysqli_fetch_array($sqlt)){
                                      ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= TanggalIndo($dat['tgl_komentar']);?></td>
                                        <td><?= $dat['nama_komentar']; ?></td>
                                        <td><?= $dat['email']; ?></td>
                                        <td><?= $dat['isi']; ?></td>
                                        <td>
                                            <form action="hapus.php?id=<?= $dat['id_komentar']; ?>" method='post'>
                                                <button type="submit" name="hapus_komentar" class=" btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</section>
