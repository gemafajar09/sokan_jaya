<?php include "koneksi.php"; ?>
<section class="content">
  <div class="row">
    <!-- left column -->

    <!-- /.box -->
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-body">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus">
                Data Loket</i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="container-fluid">
          <br>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Loket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Loket</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Informasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sqlt = mysqli_query($koneksi, "select * from tbl_loket");
                      $no=1;
                      while($dat = mysqli_fetch_array($sqlt)){
                    ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dat['nama_loket']; ?></td>
                    <td><?= $dat['alamat']; ?></td>
                    <td><?= $dat['latitude']; ?></td>
                    <td><?= $dat['longitude']; ?></td>
                    <td><?= $dat['informasi']; ?></td>
                    </td>
                    <td>
                      <form action="hapus.php?id=<?= $dat['id_loket']; ?>" method='post'>
                        <a href="index.php?page=ubah_loket&id=<?= $dat['id_loket']; ?>" class="btn btn-info "><i
                            class="  fa fa-pencil-square"></i></a>
                        <button type="submit" name="hapus_loket" class=" btn btn-danger"><i
                            class=" fa fa-trash-o"></i></button>
                      </form>
                      </ul>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Input Loket</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="proses.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nmloket">Nama Loket</label>
                  <input type="text" class="form-control" id="nmloket" name="nmloket" placeholder="Nama Loket">
                </div>
                <div class="form-group">
                  <label for="almt">Alamat</label>
                  <textarea type="text" class="form-control" id="almt" name="almt" placeholder="Alamat Loket"></textarea>
                </div>
                <div class="form-group">
                  <label for="lati">Latitude</label>
                  <input type="text" class="form-control" id="lati" name="lati" placeholder="Latitude">
                </div>
                <div class="form-group">
                  <label for="longi">Longitude</label>
                  <input type="text" class="form-control" id="longi" name="longi" placeholder="Longitude">
                </div>
                <div class="form-group">
                  <label for="info">Informasi</label>
                  <textarea type="text" class="form-control" id="info" name="info" placeholder="Informasi"></textarea>
                </div>
                <div class="form-group">
                  <label for="foto_lo">Foto Loket</label>
                  <input type="file" class="form-control" id="foto_lo" name="foto_lo" placeholder="Foto Loket">
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" name="btnloket" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>