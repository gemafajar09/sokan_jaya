<?php 
include "koneksi.php";
?>
<?php
$idl = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM tbl_loket WHERE id_loket='$idl' ");
while($dat = mysqli_fetch_array($sqlt)){
?>
<div class="col-md-12">
    <div class="box-body">
        <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="nmloket">Nama Loket</label>
                    <input type="text" class="form-control"  value="<?= $dat['nama_loket'] ?>" id="nmloket" name="nmloket" placeholder="Nama Loket">
                    <input type="hidden" name="idl" value="<?= $dat['id_loket'] ?>"  class="form-control1" id="inputSuccess1">
                </div>
                <div class="form-group">
                    <label for="almt">Alamat</label>
                    <input type="text" class="form-control" value="<?= $dat['alamat'] ?>" id="almt" name="almt" placeholder="Alamat Loket">
                </div>
                <div class="form-group">
                    <label for="lati">Latitude</label>
                    <input type="text" class="form-control" value="<?= $dat['latitude'] ?>"  id="lati" name="lati" placeholder="Latitude">
                </div>
                <div class="form-group">
                    <label for="longi">Longitude</label>
                    <input type="text" class="form-control" value="<?= $dat['longitude'] ?>"  id="longi" name="longi" placeholder="Longitude">
                </div>
                <div class="form-group">
                    <label for="info">Informasi</label>
                    <textarea type="text" class="form-control" value="<?= $dat['informasi'] ?>"   id="info" name="info" placeholder="Informasi"></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_lo">Foto Loket</label>
                    <img src="images/loket/<?php echo $dat['foto_loket'] ;?>" alt="tidak muncul " width="50px">
                    <input type="file" class="form-control" value="<?= $dat['foto_loket'] ?>"  id="foto_lo" name="foto_lo" placeholder="Foto Loket">
                </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box -->
            <!-- /.box-body -->
            <div class="">
                <button name="ubah_loket" class="btn-info btn">Ubah Data</button>
                <button class="btn-primary btn" type=""><a href="?page=data_loket" style="color:black">Batal
                        Ubah</a></button>
            </div>
        </form>
        <?php } ?>
    </div>
</div>