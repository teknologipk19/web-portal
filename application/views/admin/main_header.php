<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url('admin/superadmin/dashboardadmin');?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Pundi Kreatif</b></span>
    <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span style="margin-left:10px;">Selamat Datang di Halaman Administrator</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php foreach ($users_aktif as $ba) { ?>
              <!-- <img src="<?php echo base_url();?>assets/karyawan/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs"><?php echo $ba['username'];?></span>
            <?php } ?>  
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <!-- <img src="<?php echo base_url();?>assets/karyawan/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
              <br>
              <br>
              <br>
              <p>
                <?php foreach ($users_aktif as $ba) { ?>
                <span class="hidden-x5"><?php echo $ba['username']?></span>
                <?php } ?>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              
              <div class="pull-right">
                <a href="<?php echo base_url('admin/login/logout');?>" class="btn btn-default btn-flat">Log out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>