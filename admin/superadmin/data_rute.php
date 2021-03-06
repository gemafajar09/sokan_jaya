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
                 <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"> Data Rute</i></button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container-fluid">
                <br>  <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Data Rute</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Rute Perjalanan</th>
                                  <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                      <?php
                                        $sqlt = mysqli_query($koneksi, "select * from tbl_rute");
                                        $no=1;
                                                while($dat = mysqli_fetch_array($sqlt)){
                                      ?>
                                                    <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $dat['jalur_rute']; ?></td>
                                                  <td>
                                                        <form action="hapus.php?id=<?= $dat['id_rute']; ?>" method='post'>
                                                            <a href="index.php?page=ubah_rute&id=<?= $dat['id_rute']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
                                                            <button type="submit" name="hapus_rute" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
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
            <h4 class="modal-title">Input Rute</h4>
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
                          <label for="rute">Jalur Rute</label>
                          <input type="text" class="form-control" id="rute" name="rute" placeholder="Rute">
                        </div>
                      </div>
                      <!-- /.box-body -->
                  <!-- /.box -->
                    </div>
                    <!-- /.box-body -->
                  </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" name="simpanrute" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    