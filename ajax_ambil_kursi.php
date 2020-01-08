<?php
require_once "koneksi.php";
function angkaHuruf($angka){
    $huruf = [
        "",
       "A",
       "B",
       "C",
       "D",
       "E",
       "F",
       "G",
       "H",
       "I",
       "J",
       "K",
       "L",
       "M",
       "N",
       "O",
       "P",
       "Q",
       "R",
       "S",
       "T",
       "U",
       "V",
       "W",
       "X",
       "Y",
       "Z"];
   return $huruf[$angka];
}
$id_rute = $_POST['id_rute'];
$tgl_pesan = $_POST['tgl_pesan'];
$jam = $_POST['jam'];

$json = "";
$sql_kursi = mysqli_query($koneksi, "SELECT kursi.no_kursi, IF(hasil.id_pesan = 1, 'disabled', '') AS status_kursi FROM kursi LEFT JOIN ( SELECT pemesanan_kursi.* FROM `tbl_pemesanan` pemesanan JOIN tbl_pemesanan_kursi pemesanan_kursi ON pemesanan.id_pesan = pemesanan_kursi.id_pesan WHERE pemesanan.id_rute = $id_rute and pemesanan.tanggal_pesan = date('$tgl_pesan') and pemesanan.jam = $jam ) hasil ON hasil.no_kursi = kursi.no_kursi");
while($kursi = mysqli_fetch_assoc($sql_kursi))
{   
    $json .= "<input type='checkbox' name='kursi[]' value='".$kursi['no_kursi']."' class='".strtolower(angkaHuruf($kursi['no_kursi']))."' ".$kursi['status_kursi']." />";
}
echo $json;

?>