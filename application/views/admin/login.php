<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo.png">
  <title>PENDAFTARAN SISWA BARU ALMAZAYA BANJARMASIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="https://www.almazayaislamicschool.sch.id"><img src="<?php echo base_url()?>assets/images/logo.png" style="width: 50%;"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in</p>
      
          <?php
              $errors = $this->session->flashdata('errors');
              if(!empty($errors)){
              ?>
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach($errors as $key=>$error){ ?>
                        <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
              <?php
              }
              if($msg = $this->session->flashdata('error_login')){ ?>
                <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-danger text-center">
                          <?= $msg ?>
                      </div>
                    </div>
                </div>
              <?php } else if($msg = $this->session->flashdata('success_login')){ ?>
                <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-success text-center">
                          <?= $msg ?>
                      </div>
                    </div>
                </div>
              <?php } ?>

      <form action="<?= base_url('auth/login') ?>" method="post">
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
