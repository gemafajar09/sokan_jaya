<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>DM</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>
      <?php if($_SESSION['admin']['is_aktif']== 0){
        echo "Admin";
      }else{
        echo "Driver";
      } ?>
    </b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  </nav>
</header>