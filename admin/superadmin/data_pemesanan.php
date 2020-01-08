<?php 
include "tglindo.php";
include "koneksi.php";
?>
<section class="content">
  <div class="row">
    <!-- left column -->
    <!-- /.box -->
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <!-- /.box-header -->
      <!-- form start -->
      <div class="container-fluid">
              <?php
                $sqlt = mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan a LEFT JOIN jam b ON a.id_rute=b.mobil LEFT JOIN tbl_penumpang c ON a.id_penumpang=c.id_penumpang LEFT JOIN tbl_loket d ON d.id_loket=a.id_loket LEFT JOIN tbl_rute e ON e.id_rute=a.id_rute");
                $no=1;
                while($xx = mysqli_fetch_array($sqlt)){
              ?>
                 <div class="col-md-6">
                  <div class="box">
                    <div class="box-body">
                      <h3><i><b><?= $xx['jalur_rute'] ?></b></h3></i><p>Tanggal Berangkat: <?= $xx['tanggal_pesan'] ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kode Pesan: <b><?= $xx['no_pesan'] ?></b>
                      <hr>
                      <p >Nama Pemesan : <b><?= $xx['nama_penumpang'] ?></b> &nbsp; <b style="width: 0px; height: 200px; border: 1px #000 solid;"></b>&nbsp;&nbsp;&nbsp;&nbsp;<i>PO : <b><?= $xx['nama_loket'] ?></b><br>Keberangkatan : <b><?= $xx['jam'] ?></b></i>
                      <br><i>Jumlah : <b><?= $xx['jumlah_pesan'] ?></b> Orang</i>
                      <br><i>Total Bayar : <b>Rp.<?= number_format($xx['jumlah_bayar']) ?></b></i>
                      <br><i>Lokasi : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?page=view&id=<?= $xx['id_pesan'] ?>" class="btn btn-warning fa fa-user">Views</a></i>
                      </p >
                    </div>
                  </div>
                 </div>  
              <?php } ?>
       </div>
    </div>
  </div>
</section>

<!-- Modal -->