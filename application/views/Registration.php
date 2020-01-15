<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition register-page body">
<div class="register-box ">
  <div class="register-logo">
    <a href=""><b>Registration</b>Page</a>
  </div>

  <div class="card" >
    <div class="card-body register-card-body">
     
      <form action="<?= base_url(); ?>Auth/Registration" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <small id="emailHelp" class="form-text text-danger "><?= form_error('username') ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small id="emailHelp" class="form-text text-danger "><?= form_error('password') ?></small>
        <div class="input-group mb-3">
          <input type="Nama" class="form-control" placeholder="Nama" name="nama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small id="emailHelp" class="form-text text-danger "><?= form_error('nama') ?></small>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Role</label>
          <select class="form-control" id="exampleFormControlSelect1" name="role">
            <?php foreach($role as $rl){ ?>
              <option value="<?= $rl ?>"><?= $rl ?></option>
             <?php } ?>
           
          </select>
        </div>
        <small id="emailHelp" class="form-text text-danger "><?= form_error('role_id') ?></small>
       
        <div class="row">
          
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="<?= base_url(); ?>Auth" class="text-center">Sudah Punya Akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=".<?= base_url(); ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assest/dist/js/adminlte.min.js"></script>
</body>
</html>
