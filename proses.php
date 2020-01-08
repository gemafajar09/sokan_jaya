<?php
    include "koneksi.php";
    $tgl = date('Y-m-d');
    $password = md5($_POST['pass']);
    //input datanya
if(isset($_POST['register'])){
	$simpan=mysqli_query ($koneksi,"INSERT INTO `tbl_penumpang` (`tgl_regis`,
                                                                `username`, 
                                                                `password`, 
                                                                `nama_penumpang`, 
                                                                `no_tlp`,
                                                                `alamat`) VALUES (
                                                                    '$tgl',
                                                                    '$_POST[username]',
                                                                    '$password',
                                                                    '$_POST[nama]',
                                                                    '$_POST[tlp]',
                                                                    '$_POST[almt]')");

if($simpan){
	echo "<script>alert('Data Udah Di Simpan');
    window.location='index.php?page=login';
    </script>";
}else{
	echo "<script>alert('Data Gagal Di Simpan');
    window.location='index.php?page=registrasi';
    </script>";
}
}
   
    ?>