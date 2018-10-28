<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo SITE_NAME.": ". ucfirst($this->uri->segment(1)." - ".ucfirst($this->uri->segment(2))) ?></title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
        <?php
                  $success_msg= $this->session->flashdata('success_msg');
                  $error_msg= $this->session->flashdata('error_msg');
     
                      if($success_msg){
                        ?>
                        <div class="alert alert-success">
                          <?php echo $success_msg; ?>
                        </div>
                      <?php
                      }
                      if($error_msg){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo $error_msg; ?>
                        </div>
                        <?php
                      }
                   ?>
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <form role="form" method="post" action="<?php echo site_url('User/reset_password');?>">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="Reset Password" name="login" >
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('User') ?>">Register an Account</a>
            <a class="d-block small" href="<?php echo site_url('User/login_view') ?>">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>


    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  </body>

</html>
