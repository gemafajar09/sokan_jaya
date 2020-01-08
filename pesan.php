<?php 
include 'koneksi.php';
include 'tgl_indo.php';
$per_page = 5; // Batas data per halaman

if (isset($_GET['page'])) {
 $page = $_GET['page'];
}else{
  $page = 1;
}

if($page <= 1) {
  $st = 0;
}else{
  $st = ($page - 1) * $per_page;
}

$prev = $page - 1;
$next = $page + 1;

$st = $st;
$nd = $per_page;

$limit = "limit $st,$nd"; ?>
<style>
  #cc {
    background: #f2f2f2;
    padding: 20px;
  }

  .page {
    display: inline-block;
    padding: 5px 9px;
    margin-right: 4px;
    border-radius: 3px;
    border: solid 1px #c0c0c0;
    background: #e9e9e9;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #717171;
    text-transform: capitalize;
  }

  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
  }

  .pagination a:hover:not(.active) {
    background-color: #4CAF50;
    color: white;
  }
</style>
<script src="lib/jquery/jquery.min.js"></script>
<div class="contact-area">
  <div class="contact-inner area-padding">
    <div class="contact-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Riwayat Pesanan</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">


          <div class="panel panel-default">
            <div class="panel-body" style="margin-top: 20px">
              <?php
                    $be = mysqli_query($kon, "SELECT a.*, b.*, c.*, d.* FROM tb_pesan a join tb_user b join tb_mekanik c join tb_respon d on a.id_user = b.id_user and a.id_mekanik  = c.id_mekanik and d.id_pesan = a.id_pesan where a.id_user = $_SESSION[id_user] and status='1' order by tgl_pesan DESC $limit");

                    $no=1;
                    while($r=mysqli_fetch_assoc($be)){

                ?>
              <h4><?= $r["nama_user"];?></h4>
              <p align="justify" style="font-size: 12px">
                <?= tgl_indo($r["tgl_pesan"]);?>
              </p>
              <table width="100%">
                <tr>
                  <td style="font-size: 14px; color: #000" width="20%">Lokasi Tempat Mekanik </td>
                  <td width="1%"> : </td>
                  <td><b><?= $r["nama_tempat"];?></b></td>
                </tr>
                <td style="font-size: 14px; color: #000">Keterangan </td>
                <td> : </td>
                <td>
                  <?= $r["ket"];?>
                </td>
                <tr>
                  <td style="font-size: 14px; color: #000">Nama Mekanik </td>
                  <td> : </td>
                  <td>
                    <?= $r["nama_mekanik"];?>
                  </td>
                </tr>
              </table>
              <p align="right">
                <a href="?module=hapuspesanan&id=<?= $r['id_pesan'];?>"
                  onclick="return confirm ('Yakin Anda ingin meng cancel ....?')"><i
                    class="fa fa-remove fa-2x"></i></a><br><br>
                <a href="https://api.whatsapp.com/send?phone=<?php echo $r['no_telepon'] ?>" target="_blank"><i
                    class="fa fa-whatsapp fa-2x"></i></a>
                <a class="tombol<?php echo $no; ?>" href="#"><i class="fa fa-caret-down"></i> Tampilkan Balasan</button>
              </p></a>
              <hr>

              <div class="balasan<?php echo $no; ?>"
                style="display: none; color: #000; margin-bottom: 10px; text-align: right;">
                <?php 
                        if ($r["respon"] == '') {
                             ?>
                Belum Ada Balasan.
                <?php
                         }else{ ?>
                <h4>Mekanik</h4>

                <p style="font-size: 12px">
                  <?= tgl_indo($r["tgl_respon"]);?>
                </p>
                <p>
                  <?= $r["respon"];?>
                </p>
                <?php } ?>
              </div>
              <script type="text/javascript">
                $(document).ready(function () {
                  $(".tombol<?php echo $no; ?>").click(function (event) {
                    $(".balasan<?php echo $no; ?>").toggle("slow");
                    return false;
                  });
                });
              </script>
              <?php $no++; } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </p>
  <!-- /.row -->
  <br>
  <?php 
$exec2 = mysqli_query($kon,"SELECT * FROM tb_pesan");
$hitung_data = mysqli_num_rows($exec2);
$hitung_data = ceil($hitung_data/$per_page);
?>
  <div id="cc" style="float: right;">
    <div class="pagination">
      <?php

if($prev < 1) {
  echo "<a class='page'>&laquo; Sebelumnya</a>";
}else{
  echo "<a href='?module=pesan&page=$prev' class='page'>&laquo; Sebelumnya</a>";
}

for($i=1; $i<=$hitung_data; $i++) {
  if($page == $i) {
    echo " <a class='page'>" . $i . "</a> ";
  }else{
    echo " <a class='page' href='?module=pesan&page=$i'>" . $i . "</a> ";
  }
}

if($next > $hitung_data) {
  echo "<a class='page'>Selanjutnya &raquo;</a>";
}else{
  echo "<a class='page' href='?module=pesan&page=$next'>Selanjutnya &raquo;</a>";
}
?>
    </div>
  </div><br><br><br>
</div>
