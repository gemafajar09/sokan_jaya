<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<tr align="center">
    <table style="width:98%" border="0">
        <td align="center" colspan="3"></td>
</tr>
    <center><img src="images/logo1.png" alt="" style="width:110px;height:110px;margin-top: 5px"></center>
    <center>
        <h4 class="mb-4 sec-title-w3 let-spa text-bl"><b>DINAS PEHUBUNGAN KOTA PADANG</b><br><b>Provinsi Sumatera Barat</b><br>Laporan Member</h4>
    </center>
</table>
<hr>
<body>
    <!-- batas f -->
    <form action="cetak_member_bulan.php" method="GET" role="form" target="_blank">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Laporan Bulanan</div>
            <!-- Table -->
            <div class="form-group has-warning">
                <table class="table table-bordered table-striped table-responsive">
                    <tbody>
                        <tr>
                            <td>Masukan Bulan</td>
                            <td>
                                <select name="month" id="" class="form-control">
                                    <option value="0">Pilih Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">Novenber</option>
                                    </option>
                                    <option value="12">Desember</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Masukan Tahun</td>
                            <td>
                                <select name="year" id="" class="form-control">
                                    <option value="0">Pilih Tahun</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    </option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary right">Cetak</button>
            </div>
    </body>
<br>
<body>
    </form>
    <!-- /batas f -->
    <!-- bats tahun -->
    <form action="cetak_member_tahunan.php" method="GET" role="form" target="_blank">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Laporan Tahunan</div>
            <div class="form-group has-warning">
                <table class="table table-bordered table-striped table-responsive">
                    <tbody>
                        <tr>
                            <td>Masukan Tahun</td>
                            <td>
                                <select name="year" id="" class="form-control">
                                    <option value="0">Pilih Tahun</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    </option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary right">Cetak</button>
            </div>
            <body>
    </form>
</html>