<?php 
include "koneksi.php";
?>
<?php
$ida = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin='$ida' ");
while($dat = mysqli_fetch_array($sqlt)){
?>
<div class="col-md-12">
    <div class="box-body">
        <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="hidden" name="ida" value="<?= $dat['id_admin'] ?>" class="form-control1"
                    id="inputSuccess1">
                <input type="text" class="form-control" value="<?= $dat['username'] ?>" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" value="<?= $dat['password'] ?>" id="pass" name="pass">
            </div>
    </div>
    <div class="">
        <button name="ubahadmin" class="btn-info btn">Ubah Data</button>
        <a class="btn-primary btn" href="index.php?page=data_admin" style="color:black">Batal
                Ubah</a>
    </div>
    </form>
    <?php } ?>
</div>