<?php 
include "koneksi.php";
?>
<?php
$id = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM jam WHERE id_jam='$id' ");
while($dat = mysqli_fetch_array($sqlt)){
?>
<div class="col-md-12">
    <div class="box-body">
        <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3">Pilih Rute Perjalanan</label>
                    <input type="hidden" name="id" value="<?= $dat['id_jam'] ?>"  class="form-control1" id="inputSuccess1">
                    <input type="text" name="tujuan" class="form-control" value="<?= $dat['tujuan'] ?>">
                </div>

                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="text" class="form-control" value="<?= $dat['jam'] ?>"  id="jam" name="jam" placeholder="Jam Berangakt">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" value="<?= $dat['harga'] ?>"  id="harga" name="harga" placeholder="Harga">
                </div>
            </div>
            <div class="">
                <button name="ubah_jadwal" class="btn-info btn">Ubah Data</button>
                <button class="btn-primary btn" type=""><a href="index.php?page=data_jadwal" style="color:black">Batal
                        Ubah</a></button>
            </div>
        </form>
    </div>
    <?php } ?>
</div>