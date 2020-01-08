<?php
 $id_loket1 = $_GET['id'];
$ids = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$ids="";
$lat="";
$long="";
$foto_loket="";
$nama_loket="";
$alamat="";
foreach($obj->results as $item){
  $ids.=$item->id_loket;
  $lat.=$item->latitude;
  $long.=$item->longitude;
  $foto_loket.=$item->foto_loket;
  $nama_loket.=$item->nama_loket;
  $alamat.=$item->alamat;
}
$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pemesanan</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Pemesanan</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSnFipxaBhQcKE_i8itckeTlY3cbOh9TE&callback=initMap">
</script>

<script>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();

  function showPlaces() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {
        lat: 0,
        lng: 0
      },
      zoom: 13
    });

    directionsDisplay.setMap(map);

    directionsDisplay.setPanel(document.getElementById('right-panel'))
    var trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map);
    // Menggunakan fungsi HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        map.setCenter(pos);
        // pindahkan lokasi kita ke kotak input
        document.getElementById("longitude").value = pos.lng;
        document.getElementById("latitude").value = pos.lat;
        var contentString = 'Posisi Anda Saat Ini';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        map.setCenter(pos);
        var user_location = position.coords.latitude + "," + position.coords.longitude;
        var url = "tampil.php";


        var start = position.coords.latitude + "," + position.coords.longitude;
        var end = new google.maps.LatLng( <?php echo $lat ?> ,<?php echo $long ?> );
        var request = {
          origin: start,
          destination: end,
          travelMode: google.maps.TravelMode.DRIVING,
          provideRouteAlternatives: true
        };

        directionsService.route(request, function (response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
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
      }, function () {
        handleLocationError(true, map.getCenter());
      });
    } else {
      handleLocationError(false, map.getCenter());
    }
  }

  function handleLocationError(browserHasGeolocation, pos) {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {
        lat: -0.944633,
        lng: 100.3394329
      },
      zoom: 13
    });
    var infoWindow = new google.maps.InfoWindow({
      map: map
    });
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
      'Error: The Geolocation service failed.' :
      'Error: Your browser doesn\'t support geolocation.');
  }

  google.maps.event.addDomListener(window, 'load', showPlaces);
</script>

<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center"><br>
                        <h2> Pemesanan Tiket</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-info panel-dashboard">
                    <div class="panel-heading centered">
                        <h2 class="panel-title"><strong> - Lokasi - </strong></h5>
                    </div>
                    <div class="panel-body">
                        <div id="map" style="width:100%;height:500px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-info panel-dashboard">
                    <div class="panel-heading centered">
                        <h2 class="panel-title"><strong> - Form Pemesanan - </strong></h5>
                    </div>
                    <div class="panel-body">
                        <form action="prosespesan.php" method="post" enctype="multipart/form-data">
                            <tr>
                                <td>
                                  <!-- <h5><img src="admin/superadmin/images/loket/<?= $foto_loket;?>" border="0" width="350px" height="150px"></h5> -->
                                </td>
                                <td>Nama Loket :</td>
                                <td><?php echo $nama_loket ?><br></td>
                            </tr>
                            <tr>
                                <td width="30%">Lokasi</td>
                                <td>
                                    <h5><?php echo $alamat ?></h5>
                                </td>
                                <input type="hidden" class="form-control" name="id_loket" value="<?php echo $id_loket1 ?>">
                            </tr>

                            <div class="form-group ">
                                <label class="control-label" for="inputWarning1">Nama Penumpang</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?= $_SESSION['penumpang']['nama_penumpang'];?>" id="nama">
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="inputWarning1">Tujuan</label>
                                <select class="form-control" id="rute" name="rute">
                                    <option value="">-PILIH RUTE-</option>
                                    <?php include "koneksi.php"; $sql = $koneksi->query("SELECT * FROM tbl_rute");
                                      foreach ($sql as $a ):?>
                                        <option value="<?= $a['id_rute'] ?>"><?= $a['jalur_rute'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Plat Mobil</label>
                                <input readonly type="text" name="mobil" id="mobil" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Mobil</label>
                                <input readonly type="text" name="mobil" id="mobil1" class="form-control">
                                <input type="hidden" name="id_mobil" id="id" class="form-control">
                            </div>
                            <script src="js/jquery.min.js"></script>
                            <script>
                             $(document).ready(function() {
                                    $('#rute').change(function() {
                                        var mobil_id= $(this).val();
                                        $.ajax({
                                            type : 'POST',
                                            url : 'mobil.php',
                                            data : 'mobil='+mobil_id,
                                            dataType:'json'
                                        }).done(function(data){
                                          document.getElementById("mobil").value = data.plat;
                                          document.getElementById("mobil1").value = data.mobil;
                                          document.getElementById("id").value = data.id_mobil;
                                        });
                                    })
                                });
                                $(document).ready(function() {
                                    $('#jam').change(function() {
                                        var jam_id= $(this).val();
                                        $.ajax({
                                            type : 'POST',
                                            url : 'jam.php',
                                            data : 'jam='+jam_id,
                                            dataType:'json'
                                        }).done(function(data){
                                          document.getElementById("harga").value = data.harga;
                                        });
                                    })
                                });
                            </script>
                            <input type="hidden" name='latitude' id='latitude'>
                            <input type="hidden" name='longitude' id='longitude'>
                            <div class="form-group">
                                <label for="">Jam Keberangkatan </label> <b id="jb"></b>
                                <select name="jam" id="jam" class="form-control">
                                <option value="">-PILIH JAM KEBERANGKATAN-</option>
                                <?php $data = $koneksi->query("SELECT * FROM jam");
                                  foreach($data as $a){ ?>
                                  <option value="<?= $a['id_jam'] ?>"><?= $a['jam'] ?></option>
                                  <?php } ?>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for=""> Tujuan </label> <b id="jb"></b>
                                <input type="text" class="form-control" name="tujuan" id="tujuan" value="" onkeyup="sum();" readonly>
                            </div> -->

                            <div class="form-group">
                                <label for=""> Harga Tiket </label> <b id="jb"></b>
                                <input type="text" class="form-control" name="hrg" id="harga" value="" onkeyup="sum();" readonly>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Keberangkatan </label> <b id="tgl"></b>
                                <input type="date" class="form-control" name="tgl" id="tgl">
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah Pesan </label>
                                <input type="number" class="form-control" name="pesan" id="pesan" onkeyup="sum();">
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah Bayar :</label>
                                <input class="form-control" type="number" id="jmlbayar" name="jmlbayar"
                                    readonly>
                            </div>

                          <div class="center">
                          <label for="">Pilih Kursi :</label>
                             <div id="daftar_kursi"></div>
                          </div>
                            <div class="input-group1 text-right">
                                <button class="btn btn-primary" name="pesan1" type="submit">Submit Booking</button>
                            </div>
                        </form>
                        <script type="text/javascript">
                            var data1 = <?php echo json_encode($data1); ?> ;

                            function tampildata() {
                                var data_terpilih = document.getElementsByName("idrute")[0].selectedIndex;
                                document.getElementsByName("jam")[0].value = data1[data_terpilih].jam;
                                document.getElementsByName("hrg")[0].value = data1[data_terpilih].harga;
                            }
                            document.getElementsByName("idrute")[0].addEventListener("change", tampildata);

                            function sum() {
                                var hrg = document.getElementById('harga').value;
                                var jmlpesan = document.getElementById('pesan').value;
                                var result = parseInt(hrg) * parseInt(jmlpesan);
                                if (!isNaN(result)) {
                                    document.getElementById('jmlbayar').value = result;
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
  function ambilKursi()
  {
    var data_ajax = {
        id_rute: document.getElementsByName("rute")[0].value,
        jam: document.getElementsByName("jam")[0].value,
        tgl_pesan: document.getElementsByName("tgl")[0].value
      }
    if(data_ajax.id_rute && data_ajax.jam && data_ajax.tgl_pesan)
    {
      $.ajax({
        method: "POST",
        url: "ajax_ambil_kursi.php",
        data: data_ajax,
        success: function(data){
          document.getElementById("daftar_kursi").innerHTML = data;
        }
      })
    }
  }

  document.getElementsByName("rute")[0].addEventListener("change", ambilKursi)
  document.getElementsByName("jam")[0].addEventListener("change", ambilKursi)
  document.getElementsByName("tgl")[0].addEventListener("change", ambilKursi)
</script>