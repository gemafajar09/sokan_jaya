<script>
    window.print();
</script>


<?php 
include "koneksi.php";
include "tglindo.php";
$bln = $_GET['month'];
$thn = $_GET['year'];

if($bln=='01'){
    $b="Januari";
}elseif($bln=='02'){
    $b="Februari";
}elseif($bln=='03'){
    $b="Maret";
}elseif($bln=='04'){
    $b="April";
}elseif($bln=='05'){
    $b="Mei";
}elseif($bln=='06'){
    $b="Juni";
}elseif($bln=='07'){
    $b="Juli";
}elseif($bln=='08'){
    $b="Agustus";
}elseif($bln=='09'){
    $b="September";
}elseif($bln=='10'){
    $b="Oktober";
}elseif($bln=='11'){
    $b="November";
}elseif($bln=='12'){
    $b="Desember";
}
$laporan= mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan a LEFT JOIN tbl_jadwal b ON a.id_rute=b.id_rute LEFT JOIN tbl_penumpang c ON a.id_penumpang=c.id_penumpang LEFT JOIN tbl_loket d ON a.id_loket=d.id_loket LEFT JOIN tbl_rute e ON a.id_rute=e.id_rute WHERE Date_format(tanggal_pesan,'%m')='$bln' and Date_format(tanggal_pesan,'%Y')='$thn'");
$no=1;
?>
  <tr  align="center">
  <table style="width:98%" border="0">
  <th><img src="images/logo2.png" width="150px" height="150px" align="left"> </th>
            <td align="center" colspan="3"><h3>DINAS PERHUBUNGAN<br>PEMERINTAH KOTA PADANG
            </h3>JL. DR. Sutomo, Kubu Marapalam, Kubu Marapalam, Kec. Padang Tim., Kota Padang, Sumatera Barat 25143
            </br><b>-Laporan
                Bulanan-</b></br>Pada Bulan: <?=$bln?> | Tahun : <?=$thn?></span></td>
            <th><img width="150px" height="150px" src="images/logo1.png" align="right"></th>
  </table>
</tr>
<hr>
<table class="table-bordered table table-striped " border="1" cellspacing="0" cellpadding="0" align="center"
    width="100%">
    <tr>
        <th>No</th>
        <th>Nama Penumpang</th>
        <th>Nama Loket</th>
        <th>Tanggal Berangkat</th>
        <th>Rute Perjalanan</th>
        <th>Jam Keberangkatan</th>
        <th>Jumlah Pesan</th>
        <th>Nomor Kursi</th>
        <th>Jumlah Bayar</th>
    </tr>
    <?php
        while ($xx = mysqli_fetch_array($laporan)){ 	
        ?>
    <tr align="center">
        <td><?= $no++ ?></td>
        <td><?= $xx['nama_penumpang'];?></td>
        <td><?= $xx['nama_loket'];?></td>
        <td><?= TanggalIndo($xx['tanggal_pesan']);?></td>
        <td><?= $xx['jalur_rute'];?></td>
        <td><?= $xx['jam'];?></td>
        <td><?= $xx['jumlah_pesan'];?></td>
        <td><?= $xx['no_kursi'];?></td>
        <td>Rp.<?= number_format($xx['jumlah_bayar'],2)?></td>
    </tr>
    <?php } ?>
    <?php 
        $laporan= mysqli_query($koneksi,"SELECT SUM(jumlah_bayar) AS sayang FROM tbl_pemesanan WHERE Date_format(tanggal_pesan,'%m')='$bln' and Date_format(tanggal_pesan,'%Y')='$thn'");
        while ($xx = mysqli_fetch_array($laporan)){

    ?>
    <tr>
    <td colspan="8">
        Total Pembayaran :
    </td>
    <td align="center">
        Rp.<?= number_format ($xx['sayang'],2) ?>
    </td>
    </tr>
        <?php } ?>
    </tr>
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