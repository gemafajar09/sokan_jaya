<!-- <?php
include "koneksi.php";
$sqlp = mysqli_query($koneksi,"SELECT * FROM tbl_admin");
$jmlm = 0;
while($rm = mysqli_fetch_array($sqlp)){
  $jmlm++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_jadwal");
$jmll = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmll++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_komentar");
$jmlt = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlt++;


// $asd =htmlcharacter($_POST['asd']);

}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_loket");
$jmlg = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlg++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan");
$jmla = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmla++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_penumpang");
$jmlr = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlr++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_rute");
$jmlpe = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlpe++;
}

?>    -->
   

   <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<?php 

if($_SESSION['admin']['is_aktif']== 0){
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo "$jmlm" ?></h3>

              <p>Data Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo "$jmll" ?><sup style="font-size: 20px"></sup></h3>
              <p>Data Loket</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo "$jmlt" ?></h3>
              <p>Data Jadwal</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo "$jmlg" ?></h3>
              <p>Data Rute</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo "$jmla" ?></h3>

              <p>Data Komentar</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo "$jmlr" ?><sup style="font-size: 20px"></sup></h3>

              <p>Data Penumpang</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo "$jmlpe" ?></h3>

              <p>Data Pemesanan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php }else{

} ?>
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </section>