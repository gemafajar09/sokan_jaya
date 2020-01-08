<?php 
include "koneksi.php";
?>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">
        <br>       
        <div class="box">
            <div class="box box-info"></div>
          <div class="box-header">
            <h3 class="box-title">Data Penumpang</h3>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama Penumpang</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php
                    $sqlt = mysqli_query($koneksi, "SELECT * FROM `tbl_penumpang`");
                    $no=1;
                    while($dat = mysqli_fetch_array($sqlt)){
                  ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dat['nama_penumpang']; ?></td>
                    <td><?= $dat['no_tlp']; ?></td>
                    <td><?= $dat['alamat']; ?></td>
                          <td>
                             <form action="hapus.php?id=<?= $dat['id_penumpang']; ?>" method='post'>
                                  <button type="submit" name="hapus_penumpang" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
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
  </div>
</section>