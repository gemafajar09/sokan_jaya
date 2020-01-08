<?php
include "../../koneksi.php";

$id = $_SESSION['admin']['id_admin'];

$data = $koneksi->query("SELECT * FROM tbl_admin WHERE id_admin='$id'")->fetch_array();
echo json_encode($data);


?>