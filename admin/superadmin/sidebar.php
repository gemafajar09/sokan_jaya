<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            <?php if($_SESSION['admin']['is_aktif']== 0){
              echo "Admin";
            }else{
              echo "Driver";
            } ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
<?php 

if($_SESSION['admin']['is_aktif']== 0){
?>
        <li>
          <a href="?page=data_loket">
            <i class="fa fa-calendar"></i> 
            <span>Data Loket</span>
          </a>
        </li>

        <li>
          <a href="?page=data_jadwal">
            <i class="fa fa-tasks"></i>
            <span> Data Jadwal</span>
          </a>
        </li>

        <!-- <li>
          <a href="?page=data_rute">
            <i class="fa fa-tasks"></i>
            <span> Data Rute</span>
          </a>
        </li> -->

        <li>
          <a href="?page=data_komentar">
            <i class="fa fa-pie-chart"></i>
            <span>Data Komentar</span>
          </a>
        </li>

        <li>
          <a href="?page=data_penumpang">
            <i class="fa fa-envelope"></i> 
            <span>Data Penumpang</span>
          </a>
        </li> 
    
        <li>
          <a href="?page=data_pemesanan">
            <i class="fa fa-pie-chart"></i>
            <span>Data Pemesanan</span>
          </a>
        </li>
        <!-- <li>
          <a href="?page=lap_member">
            <i class="fa fa-tasks"></i>
            <span> Laporan Member</span>
          </a>
        </li> -->

        <li>
          <a href="?page=lap_loket">
            <i class="fa  fa-wrench"></i>
            <span> Laporan Loket</span>
          </a>
        </li>

        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
            <span class="pull-right-container"> </span>
          </a>
        </li>
<?php }else{ ?>
      <li>
          <a href="?page=data_pemesanan">
            <i class="fa fa-pie-chart"></i>
            <span>Data Pemesanan</span>
          </a>
        </li>

        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
            <span class="pull-right-container"> </span>
          </a>
        </li>
<?php } ?>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>