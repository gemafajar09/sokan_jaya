<?php 
include "koneksi.php";
?>
<?php
$idp = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM tbl_pesan WHERE id_pesan='$idp' ");
while($dat = mysqli_fetch_array($sqlt)){
?>
<div class="col-md-12">
<div class="box-body">
        <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tgl">Tanggal</label>
                <input type="date" class="form-control" value="<?= $dat['tgl_pesan'] ?>"  id="tgl" name="tgl">
                <input type="hidden" name="idp" value="<?= $dat['id_pesan'] ?>"  class="form-control1" id="inputSuccess1">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="<?= $dat['nama'] ?>" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?= $dat['email'] ?>" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea type="text" class="form-control" value="<?= $dat['pesan'] ?>" name="pesan" id="pesan"></textarea>
            </div>

            <!-- /.box-body -->
        <!-- /.box -->
        <!-- /.box-body -->
    </div>
			<div class="">
				<button name="ubahpesan" class="btn-info btn">Ubah Data</button>
                <button class="btn-primary btn" type=""><a href="index.php?page=data_pesan" style="color:black">Batal Ubah</a></button>
			</div>
</form>  


    <?php } ?>
</div>
</div>
