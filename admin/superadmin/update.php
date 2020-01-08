    
<?php
include "koneksi.php";
if (isset($_POST['ubahadmin'])){

	$ida = $_POST['ida'];
	$query =mysqli_query($koneksi, "UPDATE tbl_admin SET 
	   `username`='$_POST[username]',
	   `password`='$_POST[pass]' WHERE `id_admin`='$ida'");

	echo "<script>alert('Data Sudah DiEdit');
	window.location='index.php?page=data_admin';
	</script>";
}
elseif (isset($_POST['ubah_loket'])){

	$nama_fo = $_FILES['foto_lo']['name'];
	$lokasi = $_FILES['foto_lo']['tmp_name'];
	$tipe = $_FILES['foto_lo']['type'];


	if($lokasi==""){
	$query = "UPDATE tbl_loket SET 
        `nama_loket`='$_POST[nmloket]',
		`alamat`='$_POST[almt]',
		`latitude`='$_POST[lati]', 
		`longitude`='$_POST[longi]',
		`informasi`='$_POST[info]' WHERE `id_loket`='$_POST[idl]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());
	}
	else{
move_uploaded_file($lokasi,"images/loket/$nama_fo");
$query = "UPDATE tbl_loket SET 
        `nama_loket`='$_POST[nmloket]',
		`alamat`='$_POST[almt]',
		`latitude`='$_POST[lati]', 
		`longitude`='$_POST[longi]',
		`informasi`='$_POST[info]',
        `foto_loket`='$nama_fo' WHERE `id_loket`='$_POST[idl]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());

	}
	echo "<script>alert('Data Sudah Ubah');
	window.location='index.php?page=data_loket';
	</script>";
}

elseif (isset($_POST['ubah_jadwal'])){
	$id = $_POST['id'];
	$idl = $_POST['tjuan'];
	$harga = $_POST['harga'];
	$jam = $_POST['jam'];
	$query =mysqli_query($koneksi, "UPDATE jam SET 
	   `jam`='$jam',
	   `harga`='$harga',
	   `tujuan`='$idl', WHERE `id_jam`='$id'");

	echo "<script>alert('Data Sudah DiEdit');
	window.location='index.php?page=data_jadwal';
	</script>";
}
elseif (isset($_POST['ubah_rute'])){

	$ida = $_POST['idr'];
	$query =mysqli_query($koneksi, "UPDATE tbl_rute SET 
	   `jalur_rute`='$_POST[rute]' WHERE `id_rute`='$ida'");

	echo "<script>alert('Data Sudah DiEdit');
	window.location='index.php?page=data_rute';
	</script>";
}


// batas
?>

