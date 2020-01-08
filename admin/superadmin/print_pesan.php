<?php 
session_start();
include_once "koneksi.php";
?>
<style type="text/css">
    <!--
    .style1 {
        font-size: 22px;
        font-weight: bold;
    }
    -->
</style>

<body onLoad="window.print()">
    <table align="center">
        <tr style="color: blue">
            <td align="center">SMK N 8 PADANG<br>
                Jl. Raya Padang Indarung Km. 8, Cengkeh, Cangkeh Nan XX, Lubuk Begalung, Kota Padang, Sumatera Barat
                25159<br>
                LAPORAN DATA PEMESANAN</td>
        </tr>
    </table>
    </span></p>
    <hr>
    <table class="table table-condensed table-bordered table-hover" border="1" width="80%" align="center">
        <thead>
            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>No</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Nama Pemesan</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Alamat Customer</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Lokasi Kerusakan</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Nama Mekanik</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Lokasi Mekanik</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Tanggal </h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Keterangan</h5>
                </font>
            </td>

            <td align="center">
                <font face="Times New Roman, cursive" class="text-error text-center">
                    <h5>Status</h5>
                </font>
            </td>
        </thead>
        <tbody>
            <?php
					$dari=$_POST['dari'];
					$sampai=$_POST['sampai'];
					$be = mysqli_query($kon,"SELECT * FROM tb_pesan a left join tb_user b on a.id_user= b.id_user left join tb_mekanik c on a.id_mekanik=c.id_mekanik where (tgl_pesan BETWEEN '$dari' AND '$sampai') order by a.id_mekanik desc ");
					$no=1;
					while($r=mysqli_fetch_assoc($be)){
            if ($r['status']=='1'){
                $status="Di Terima ";
              }else if ($r['status']=='0'){
                $status="Di Cancel";
              } 
				?>
            <tr>
                <td align="center" width="3%"><?= $no; ?></td>
                <td width="10%"><?= $r["nama_user"];?></td>
                <td width="20%"><?= $r["alamat"];?></td>
                <td width="20%"><?= $r["alamat_kerusakan"];?></td>
                <td width="10%"><?= $r["nama_mekanik"];?></td>
                <td width="20%"><?= $r["nama_tempat"];?></td>
                <td width="10%"><?= $r["tgl_pesan"];?></td>
                <td width="20%"><?= $r["ket"];?></td>
                <td width="15%"><?= $status;?></td>
        </tbody>
        <?php $no++; } ?>
    </table>
    <br><br>
    <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td width="63%" bgcolor="#FFFFFF">
                <p align="center"><br />
            </td>
            <td width="37%" bgcolor="#FFFFFF">
                <div align="center">Padang , <?php $tgl = date('d M Y');
                echo " $tgl";?><br />
                    A.n Mekanik
                    <br /><br />
                    <br /><br />
                    (...............................)
                    <br />
                </div>
            </td>
        </tr>
    </table>