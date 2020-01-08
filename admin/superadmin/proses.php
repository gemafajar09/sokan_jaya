
<?php
include "koneksi.php";
if (isset($_POST['simpanadmin'])){
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	
	$ket = mysqli_query($koneksi,"INSERT INTO `tbl_admin`( `username`, `password`) 
												  VALUES ('$user','$pass')");


	if ($ket) {
		
		echo "<script>alert('Data berhasil disimpan');</script>";
		echo "<script>location='index.php?page=data_admin';</script>";
	}
	else{
		echo "<script>alert('Data Gagal disimpan');</script>";
		echo "<script>location='index.php?page=data_admin';</script>";	
	}

}
elseif (isset($_POST['btnloket'])){

	$nama_foto = $_FILES['foto_lo']['name'];
	$lokasi = $_FILES['foto_lo']['tmp_name'];
	$tipe = $_FILES['foto_lo']['type'];


	if($lokasi==""){
	$query = "INSERT INTO tbl_loket SET 
	nama_loket = '$_POST[nmloket]',
	alamat = '$_POST[almt]',
	latitude = '$_POST[lati]',
	longitude = '$_POST[longi]',
	informasi = '$_POST[info]'";
	
	}
	else{
move_uploaded_file($lokasi,"images/loket/$nama_foto");
$query = "INSERT INTO tbl_loket SET 
	nama_loket = '$_POST[nmloket]',
	alamat = '$_POST[almt]',
	latitude = '$_POST[lati]',
	longitude = '$_POST[longi]',
	informasi = '$_POST[info]',
    foto_loket = '$nama_foto'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());

	}
	echo "<script>alert('Data Sudah disimpan');
	window.location='index.php?page=data_loket';
	</script>";
}
elseif (isset($_POST['btn_jadwal'])){
	$idr = $_POST['tujuan'];
	$jam = $_POST['jam'];
	$hrg = $_POST['harga'];
	$mobil = $_POST['mobil'];
	
	$ket = mysqli_query($koneksi,"INSERT INTO `jam` (`mobil`, `jam`, `harga`, `tujuan`) VALUES ('$mobil','$jam','$hrg','$idr')");
	if ($ket) {
		
		echo "<script>alert('Data berhasil disimpan');</script>";
		echo "<script>location='index.php?page=data_jadwal';</script>";
	}
	else{
		echo "<script>alert('Data Gagal disimpan');</script>";
		echo "<script>location='index.php?page=data_jadwal';</script>";	
	}

}
elseif (isset($_POST['btn_save'])){

	$nama_pro = $_FILES['foto_pro']['name'];
	$lokasi = $_FILES['foto_pro']['tmp_name'];
	$tipe = $_FILES['foto_pro']['type'];
	
	if($lokasi==""){
	$query = "INSERT INTO tbl_produk SET 
	`merek` = '$_POST[merek_k]',
	`jenis_produk` = '$_POST[jenis]',
	`jumlah` = '$_POST[jml]',
	`harga` = '$_POST[hrg]'";
	}
	else{
		move_uploaded_file($lokasi,"images/produk/$nama_pro");
$query = "INSERT INTO tbl_produk SET 
	`merek` = '$_POST[merek_k]',
	`jenis_produk` = '$_POST[jenis]',
	`foto_produk` = '$nama_pro',
	`jumlah` = '$_POST[jml]',
	`harga` = '$_POST[harga]'";

$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());

	}
	echo "<script>alert('Data Sudah disimpan');
	window.location='index.php?page=data_produk';
	</script>";
}


if (isset($_POST['simpanrute'])){
	$rte = $_POST['rute'];
	
	
	$ket = mysqli_query($koneksi,"INSERT INTO `tbl_rute`( `jalur_rute`) 
												  VALUES ('$rte')");


	if ($ket) {
		
		echo "<script>alert('Data berhasil disimpan');</script>";
		echo "<script>location='index.php?page=data_rute';</script>";
	}
	else{
		echo "<script>alert('Data Gagal disimpan');</script>";
		echo "<script>location='index.php?page=data_rute';</script>";	
	}

}
// batas kondisi
?>