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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i
              class="fa fa-plus">
              Data Jadwal</i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="container-fluid">
          <br>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jadwal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Mobil</th>
                    <th>Rute Perjalanan</th>
                    <th>Jam Keberangkatan</th>
                    <th>Harga Tiket</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sqlt = mysqli_query($koneksi,"SELECT * FROM jam a  LEFT JOIN mobil b ON a.mobil=b.id_mobil LEFT JOIN tbl_rute c ON c.id_rute=b.id_rute");
                    $no=1;
                    while($dat = mysqli_fetch_array($sqlt)){
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dat['mobil'] ?> | <?= $dat['plat'] ?></td>
                    <td><?= $dat['jalur_rute']; ?></td>
                    <td><?= $dat['jam']; ?></td>
                    <td>Rp.<?= number_format ($dat['harga']); ?></td>
                    <td>
                      <form action="hapus.php?id=<?= $dat['id_jam']; ?>" method='post'>
                        <a href="index.php?page=ubah_jadwal&id=<?= $dat['id_jam']; ?>" class="btn btn-info "><i
                            class="  fa fa-pencil-square"></i></a>
                        <button type="submit" name="hapus_jadwal" class=" btn btn-danger"><i
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
        <h4 class="modal-title">Input Jadwal</h4>
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
                  <label for="inputEmail3">Mobil</label>
                  <select name="mobil" class="form-control">
                    <option value="">-PILIH MOBIL-</option>
                    <?php include "../../koneksi.php"; $sql=$koneksi->query("SELECT * FROM mobil"); foreach($sql as $a): ?>
                    <option value="<?= $a['id_mobil'] ?>"><?= $a['plat'] ?> | <?= $a['mobil'] ?></option>
                  <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputEmail3">Rute Perjalanan</label>
                  <div>
                    <input type="text" name="tujuan" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jam">Jam Keberangkatan</label>
                  <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam Berangakt">
                </div>
                <div class="form-group">
                  <label for="harga">Harga Tiket</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
              </div>
            </div>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="btn_jadwal" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
  </div>
</div>