<?php 
include "../../koneksi.php";
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM tbl_pemesanan as a LEFT JOIN tbl_penumpang as b ON b.id_penumpang=b.id_penumpang WHERE id_pesan='$id'")->fetch_array();
$supir = $_SESSION['admin']['id_admin'];
$driver = $koneksi->query("SELECT * FROM tbl_admin WHERE id_admin='$supir'")->fetch_array();
// var_dump($data['lat']); die;
?>
<div class="box">
  <div class="box-header">Lokasi Penjemputan</div>
  <div class="box-body">
    <div id="peta" style="width:100%; height:500px;"></div>    
  </div>
</div>
<script>
  var lat = <?=$data['lat']?>; // latitude dari database
  var lng = <?=$data['lng']?>; // longitude dari database\
  var lat_supir = <?=$driver['lat']?>; // latitude dari database
  var lng_supir = <?=$driver['lng']?>;
  var peta = L.map('peta').setView([lat, lng], 14); // buat variabel penampung peta
  
  // tambahkan layer openstreetmap  atau tampilan peta ke variabel peta
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiZWdvZGFzYSIsImEiOiJjamd4NWkyMmwwNms2MnhsamJvaWQ3NGZmIn0.6ok1IiPZ0sPNXmiIe-iEWA'
}).addTo(peta); // ke variabel peta
var logo_oto = L.icon({
    iconUrl: 'mobil.png',
    // shadowUrl: 'mobil.png',

    iconSize:     [38, 40]
});
  // tambahkan marker ke peta
  var marker_posisi = L.marker([lat, lng]).addTo(peta);
  var marker_posisi_supir = L.marker([lat_supir, lng_supir], {icon: logo_oto}).addTo(peta);

  // tambahkan pesan ke marker_posisi
  marker_posisi.bindPopup("<b>Lokasi Penjemputan</b><br> <?= $data['nama_penumpang'] ?>").openPopup();

  // tampilkan rute antara supir dengan penumpang
  var rute = L.Routing.control({
    router: L.Routing.mapbox('pk.eyJ1IjoiZWdvZGFzYSIsImEiOiJjamd4NWkyMmwwNms2MnhsamJvaWQ3NGZmIn0.6ok1IiPZ0sPNXmiIe-iEWA'),
    waypoints: [
      L.latLng(lat, lng),
      L.latLng(lat_supir, lng_supir)
    ],
      createMarker: function(i, wp) {
        return null;
      }
  }).addTo(peta);

  // mengubah posisi tampilan peta agar kedua marker keliatan
  peta.fitBounds([
      L.latLng(lat, lng),
      L.latLng(lat_supir, lng_supir)
    ]);

  peta.setZoom(14)
</script>
