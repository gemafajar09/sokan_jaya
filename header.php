<?php
error_reporting(0);
session_start();

?>
<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img witdh="500px" height="63px" src="images/logos/logo6.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Home</a></li>
                        <?php if($_SESSION['penumpang']['id_penumpang']): ?>
                        <?php else : ?>
                        <li><a href="?page=profil">About Us</a></li>
                        <?php endif;?>
                        <?php if($_SESSION['penumpang']['id_penumpang']): ?>
                        <li> <a href="?page=riwayat_pesan">Riwayat Pemesanan</a></li>
                        <?php else : ?>
                        <li><a href="?page=kontak">Contact</a></li>
                        <?php endif;?>
                        <?php if($_SESSION['penumpang']['id_penumpang']): ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php else : ?>
                        <li><a href="?page=registrasi">Registrasi</a></li>
                        <?php endif ;?>
                        <?php if($_SESSION['penumpang']['id_penumpang']): ?>
                        <li><a class="fa fa-user" style="font-size:'12px'"> <?= $_SESSION['penumpang']['nama_penumpang'];?></a></li>
                        <?php else : ?>
                        <li><a href="?page=login">Login</a></li>
                        <?php endif ;?>
                        <li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>
                        <li class="social-links"><a href="https://api.whatsapp.com/send?phone=628123456789&text=Hallo%20Agan%20Baik"><i class="fa fa-phone global-radius"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>