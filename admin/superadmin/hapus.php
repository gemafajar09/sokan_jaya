<?php
include "koneksi.php";

if (isset($_POST['hapus_loket']))
{
  
  $query=mysqli_query($koneksi,"DELETE  FROM tbl_loket WHERE id_loket='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_loket';
    </script>";
 }
}
   else if (isset($_POST['hapus_admin']))
{
  
  $query=mysqli_query($koneksi,"DELETE  from tbl_admin WHERE id_admin='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_admin';
    </script>";
 }
}
   elseif (isset ($_POST['hapus_jadwal']))
{
    $query=mysqli_query($koneksi,"DELETE  FROM jam WHERE id_jam='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_jadwal';
    </script>";
 }

}
   elseif (isset ($_POST['hapus_penumpang']))
{
    $query=mysqli_query($koneksi,"DELETE  from tbl_penumpang WHERE id_penumpang='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_penumpang';
    </script>";
 }

}
   elseif (isset ($_POST['hapus_komentar']))
{
    $query=mysqli_query($koneksi,"DELETE  FROM tbl_komentar WHERE id_komentar='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_komentar';
    </script>";
 }

}
elseif (isset ($_POST['hapus_rute']))
{
    $query=mysqli_query($koneksi,"DELETE  FROM tbl_rute WHERE id_rute='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('Data Sudah Di Hapus Bosku');
    window.location='index.php?page=data_rute';
    </script>";
 }

}
elseif (isset ($_POST['hapus_pemesanan']))
{
    $query=mysqli_query($koneksi,"DELETE  from tbl_pemesanan WHERE id_pesan='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('Data Sudah Di Hapus Bosku');
    window.location='index.php?page=data_pemesanan';
    </script>";
 }

}


?>