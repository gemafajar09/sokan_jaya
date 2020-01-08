<script>
    window.print();
</script>


<?php 
include "koneksi.php";
include "tglindo.php";
$thn = $_GET['year'];


$laporan= mysqli_query($koneksi,"SELECT * FROM tbl_penumpang 
WHERE Date_format(tgl_regis,'%Y')='$thn'");
$no=1;
?>
  <tr  align="center">
  <table style="width:98%" border="0">
  <th><img src="images/logo2.png" width="150px" height="150px" align="left"> </th>
            <td align="center" colspan="3"><h3>DINAS PERHUBUNGAN<br>PEMERINTAH KOTA PADANG
            </h3>JL. DR. Sutomo, Kubu Marapalam, Kubu Marapalam, Kec. Padang Tim., Kota Padang, Sumatera Barat 25143
            <th><img width="150px" height="150px" src="images/logo1.png" align="right"></th>
  </table>
</tr>
<hr>
<table class="table-bordered table table-striped " border="1" cellspacing="0" cellpadding="0" align="center"
    width="100%">
    <tr>
        <th>No</th>
        <th>Tanggal Registrasi</th>
        <th>Nama Penumpang</th>
        <th>Nomor Telepon</th>
        <th>Alamat</th>
    </tr>
    <?php
        while ($xx = mysqli_fetch_array($laporan)){ 	
        ?>
    <tr align="center">
        <td><?= $no++ ?></td>
        <td><?= TanggalIndo($xx['tgl_regis']);?></td>
        <td><?= $xx['nama_penumpang'] ?></td>
        <td><?= $xx['no_tlp'] ?></td>
        <td><?= $xx['alamat'] ?></td>
    </tr>
    <?php } ?>
</table>
<br>
<br>
<table border="0" align="right">
    <tr>
        <td colspan="2" align="center"><b>Padang
                <?php echo date('d-M-Y');?> </b></br><b>Direktur</b></br></br></br></br>
            <hr><b>Retno Setianto</b></td>
    </tr>
</table>
</body>