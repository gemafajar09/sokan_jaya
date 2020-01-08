<?php
include "koneksi.php";
$mobil = $_POST['mobil'];
    $sql = $koneksi->query("SELECT * FROM mobil WHERE id_rute='$mobil'");
    $row = $sql->fetch_assoc();
    echo json_encode($row);
?>