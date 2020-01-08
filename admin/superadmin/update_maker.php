<?php
include "../../koneksi.php";

$id = $_GET['id'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];

$koneksi->query("UPDATE tbl_admin SET lat='$lat', lng='$lng' WHERE id_admin='$id'");


?>