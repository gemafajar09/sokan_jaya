
<?php include "slide.php";
include "koneksi.php"  ?>

<div class="about-box">
	<div class="container">
		<div class="about-area area-padding">
			<div class="container">
        <input type="hidden" name='latitude' id='latitude'>
        <input type="hidden" name='longitude' id='longitude'>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h2>Lokasi Loket Bus</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div id="map" style="width:100%; height:700px;"></div>
					<div class="col-lg-3">
        	</div>
	<hr class="hr1">
	<div class="row">
		<div class="col-md-6">
			<div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
				<img style="witdh:50px; height:250px" src="uploads/logo6.png" alt="" class="img-responsive">
			</div><!-- end media -->
		</div>
		<div class="col-md-6">
			<div class="message-box right-ab">
				<h4>Penghargaan Besar Buat Kami Dinas Perhubungan Kota Padang</h4>
				<h2>Welcome to Dishub.com</h2>
				<p>Kota Padang yang tertuang dalam RPJMD Kota Padang Tahun 2014–2019 serta merupakan gambaran arah pembangunan atau kondisi masa depan yang ingin dicapai Dinas Perhubungan melalui penyelenggaraan tugas dan fungsi dalam kurun waktu 5 (lima) tahun yang akan datang.</p>
				<p>Kota Padang sebenarnya masih dihadapkan pada berbagai macam persoalan kota, khususnya permasalahan di sektor perhubungan </p>
				<a href="?page=profil" class="btn btn-light btn-radius grd1 btn-brd"> Read More </a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSnFipxaBhQcKE_i8itckeTlY3cbOh9TE&callback=initMap">
</script>
<script> 


// map, variabel GLOBAL untuk mengatur google map
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 18,
});
// posisi_kita, variabel GLOBAL yang dipakai untuk menampung posisi kita
var posisi_kita = {
  lat: 0,
  lng: 0
};

// setPosisiKita(), fungsi yang digunakan untuk mengatur posisi_kita
// berdasarkan GPS
function setPosisiKita() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        // update posisi_kita dengan posisi gps
        posisi_kita.lat = position.coords.latitude;
        posisi_kita.lng = position.coords.longitude;

        // ubah posisi google maps ke posisi_kita
        map.setCenter(posisi_kita);

        // pindahkan lokasi kita ke kotak input
        document.getElementById("longitude").value = posisi_kita.lng;
        document.getElementById("latitude").value = posisi_kita.lat;

        // setelah posisi ketemu, jalankan showPlaces() atau tampilkan radius
        showPlaces()
      })
    }
  }

  // showPlaces(), fungsi untuk menampilkan radius lingkaran
  function showPlaces() {

    var contentString = 'Posisi Anda Saat Ini';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    marker = new google.maps.Marker({
      position: posisi_kita,
      map: map,
      icon: 'img/ppl.png',
      title: 'Posisi Anda Saat Ini',
      animation: google.maps.Animation.DROP,
    });
    google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    map.setCenter(posisi_kita);

    var url = "tampil.php";

    var lingkaran = new google.maps.Circle({
      center: posisi_kita,
      radius: 15000,
      strokeColor: "#0000F7",
      strokeOpacity: 0.9,
      strokeWeight: 1,
      fillColor: "#0000F7",
      fillOpacity: 0.2
    });

    lingkaran.setMap(map);

    $.ajax({
      url: url,
      data: "position=" + encodeURI(posisi_kita.lat + "," + posisi_kita.lng) + "&jarak=" + 4,
      dataType: 'json',
      cache: true,
      success: function (msg) {
        for (i = 0; i < msg.data.loket.length; i++) {
          var point = new google.maps.LatLng(parseFloat(msg.data.loket[i].latitude), parseFloat(msg.data.loket[i].longitude));
          var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h5 id="firstHeading" class="firstHeading">' + msg.data.loket[i].nama_loket + '</h5>' +
            // '<img src="admin/superadmin/images/loket/' + msg.data.loket[i].foto_loket + '" style=height:70px; width:140px >' +
            '<div id="bodyContent">' +
            <?php if (empty($_SESSION['penumpang']['id_penumpang']))
                   { ?>
          '<a href=index.php?pesan=error>Buat Pesanan</a>' +
          '</div>' +
          '</div>';
          <?php }else{ ?>

          '<a href=?page=detail&id=' + msg.data.loket[i].id_loket + '>Buat Pesanan</a>' +
            '</div>' +
            '</div>';
          <?php } ?>
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          var tanda = new google.maps.Marker({
            position: point,
            map: map,
            icon: "img/marker2.png",
            animation: google.maps.Animation.DROP,
            title: msg.data.loket[i].nama_loket
          });
          google.maps.event.addListener(tanda, 'click', getInfoCallback(map, contentString));
        }
      }
    });


    function getInfoCallback(map, content) {
      var infowindow = new google.maps.InfoWindow({
        content: content
      });
      return function () {
        infowindow.setContent(content);
        infowindow.open(map, this);
      };
    }

  }

setPosisiKita()

                
</script>
<?php include "testimoni.php"; ?>