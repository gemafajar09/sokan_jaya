<?php
session_start();  
include "koneksi.php";

if (isset($_POST['pesan1'])) {
       // ambil data hasil submit dari form
       $rute           = $_POST['rute'];
       $id_penumpang   = $_SESSION['penumpang']['id_penumpang'];
       $id_loket       = $_POST['id_loket'];
       // nopesan
       $a              = date('Y-m-d-h-i-s');
       $krr            = explode('-',$a);
       $nopen          = implode("",$krr);
       $no_pesan       = 'NP-'.$nopen;
       // 
       $jml_pesan      = $_POST['pesan'];
       // no kursi
       $kursi1         = $_POST['kursi'];
       $source         = "";
       
       $tempat=substr($source,0,-1);
       // 
       $tgl_pesan      = $_POST['tgl'];
       $jmlbayar	  = $_POST['jmlbayar'];
       $lat            = $_POST['latitude'];
       $lng            = $_POST['longitude'];
       $jam            = $_POST['jam'];
              $query = mysqli_query($koneksi,"INSERT INTO `tbl_pemesanan`(`id_rute`, `id_penumpang`, `id_loket`, `no_pesan`, `jumlah_pesan`, `tanggal_pesan`, `jumlah_bayar`, `lat`, `lng`, `jam`) VALUES ('$rute','$id_penumpang','$id_loket','$no_pesan','$jml_pesan','$tgl_pesan','$jmlbayar','$lat','$lng','$jam')");
              $id_pesan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT LAST_INSERT_ID() as id_pesan"));
              // echo $id; exit;
              foreach($kursi1 as $value_kursi){
                     $koneksi->query("INSERT INTO `tbl_pemesanan_kursi`(`id_pesan`, `no_kursi`) VALUES ('$id_pesan[id_pesan]','$value_kursi')");
              }
      echo"  <script>alert('Tiket Telah Di Booking'); 
              window.location='index.php?page=home'; 
              </script>";
			
	}else{
              echo"  <script>alert('Tiket Gagal Di Booking'); 
              window.location='index.php?page=home'; 
              </script>";     
       }
?>