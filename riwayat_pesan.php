<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Histori</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Histori</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="contact pb-5" id="contact">
    <div class="container pb-xl-5 pb-lg-3">
        <div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" style="margin-top: 50px;margin-bottom: 200px">
            <div class="form-w3ls p-md-12 p-4">
                <center><img src="uploads/logo1.png" alt="" style="width:130px;height:130px;margin-top: 5px"></center>
                <center>
                    <h4 class="mb-4 sec-title-w3 let-spa text-bl"><b>DINAS PEHUBUNGAN KOTA PADANG</b><br><b>Provinsi Sumatera Barat</b></h4>
                </center>
                <div class="container">
                    <br>
                    </br>
                    <button class="btn  btn-success fa fa-whatsapp fa-1x pull-right"><a
                            href="https://api.whatsapp.com/send?phone=6285363229539&text=Halo%20Admin%20Saya%20Mau%20Bertanya?"
                            style="color:white" target="_blank">Chat Whatsapp</a></button>
                    <!-- Wa -->
                    <div class="input-group1 text-right">
                    </div>
                    <!-- /Wa -->
                    </br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penumpang</th>
                                <th>Nama Loket</th>
                                <th>Tanggal Berangkat</th>
                                <th>Rute Perjalanan</th>
                                <th>Jam Keberangkatan</th>
                                <th>Jumlah Pesan</th>
                                <th>Nomor Kursi</th>
                                <th>Jumlah Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php $idpen = $_SESSION['penumpang']['id_penumpang'];?>
                        <?php
                            include "koneksi.php";
                            include "tglindo.php";
                            $sql = mysqli_query($koneksi,"SELECT * FROM tbl_histori a LEFT JOIN tbl_jadwal b ON a.id_rute=b.id_rute LEFT JOIN tbl_penumpang c ON a.id_penumpang=c.id_penumpang LEFT JOIN tbl_loket d ON a.id_loket=d.id_loket LEFT JOIN tbl_rute e ON a.id_rute=e.id_rute  WHERE a.id_penumpang='$idpen'");
                            $no=1;
                            while ($xx = mysqli_fetch_array($sql)){
                                 $id_loket = $xx['id_loket'];
                                
                            //  var_dump($xx);
                        ?>
                           
                        <tbody>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $xx['nama_penumpang'];?></td>
                                <td><?= $xx['nama_loket'];?></td>
                                <td><?= TanggalIndo($xx['tanggal_pesan']);?></td>
                                <td><?= $xx['jalur_rute'];?></td>
                                <td><?= $xx['jam'];?></td>
                                <td><?= $xx['jumlah_pesan'];?></td>
                                <td><?= $xx['no_kursi'];?></td>
                                <td>Rp.<?= number_format($xx['jumlah_bayar'],2)?></td>
                                <td><a href="hapus_histori.php?id=<?= $xx['no_pesan']; ?>"
                                        class="btn btn-success fa fa-times" style="font-size:20px; font-color:gren"></a></td>

                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                </table>
            </div>
        </div>
        <!-- //contact form -->
    </div>
    </div>
</section>
<!-- //contact -->