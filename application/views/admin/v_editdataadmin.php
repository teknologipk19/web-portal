<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header-->
    <?php $this->load->view('admin/main_header'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <?php $this->load->view('admin/menu_admin'); ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="background-color:#ffffff; height:60px;">
        <h1><?php echo $subtitle;?></h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-default">
              <div class="box-header">
                <h3 class="box-title"><?php echo $subtitle;?></h3>
              </div>
              <div class="box-body">
                <form method="post" action="<?php echo base_url('admin/superadmin/editdataadmin');?>">
                  <div class="form-group">
                    <label>Username</label>
                    <div class="form-group">
                      <input type="hidden" name="id_admin" id="id_admin" class="form-control" value="<?php echo (isset($id_admin)) ? $id_admin : "";?>">
                      <input type="text" name="username" id="username" class="form-control" value="<?php echo (isset($username)) ? $username : "";?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <div class="form-group">
                      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo (isset($nama_lengkap)) ? $nama_lengkap : "";?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Email</label>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" value="<?php echo (isset($email)) ? $email : "";?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Password</label>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control" value="<?php echo (isset($password)) ? $password : "";?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>No Telp/HP</label>
                    <div class="form-group">
                      <input type="number" name="notelepon" id="notelepon" class="form-control" value="<?php echo (isset($notelepon)) ? $notelepon : "";?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Status</label>
                    <div class="form-group">
                      <select name="status" id="status" class="form-control">
                        <option value="" <?php if('status' == ''){echo "selected";}?>>Pilih Status</option>
                        <option value="0" <?php if('status' == '0'){echo "selected";}?>>Aktif</option>
                        <option value="1" <?php if('status' == '1'){echo "selected";}?>>Tidak Aktif</option>
                      </select>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Hak Akses</label>
                    <div class="form-group">
                      <select name="hak_akses" id="hak_akses" class="form-control">
                        <option value="" <?php if('hak_akses' == ''){echo "selected";}?>>Pilih Hak Akses</option>
                        <option value="Super Admin" <?php if('hak_akses' == 'Super Admin'){echo "selected";}?>>Super Admin</option>
                        <option value="User" <?php if('hak_akses' == 'User'){echo "selected";}?>>User</option>
                      </select>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <button type="reset" name="batal" class="btn btn-default">Batal</button>
                  </div>  
                </form>  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <?php $this->load->view('admin/footer');?>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url();?>assets/admin/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url();?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?php echo base_url();?>assets/admin/plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url();?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>
  <!-- Page script -->
</body>
</html>
