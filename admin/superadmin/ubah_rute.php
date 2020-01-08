<?php 
include "koneksi.php";
?>
<?php
$ida = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM tbl_rute WHERE id_rute='$ida' ");
while($dat = mysqli_fetch_array($sqlt)){
?>
<div class="col-md-12">
    <div class="box-body">
        <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Jalur Rute</label>
                <input type="text" class="form-control" value="<?= $dat['jalur_rute'] ?>" id="rute" name="rute">
                <input type="hidden" name="idr" value="<?= $dat['id_rute'] ?>" class="form-control1"
                    id="inputSuccess1">
            </div>
    </div>
    <div class="">
        <button name="ubah_rute" class="btn-info btn">Ubah Data</button>
        <a class="btn-primary btn" href="index.php?page=data_rute" style="color:black">Batal
            Ubah</a>
    </div>
    </form>
    <?php } ?>
</div>