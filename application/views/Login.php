<!DOCTYPE html>
<html>
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
        <div class="card-header"><h4><span ><a href="<?php echo site_url('home/index') ?>" text-decoration="none"><?php echo SITE_NAME?></a></span>~Login</h4></div>
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
 
                
                    <form role="form" method="post" action="<?php echo site_url('user/login_user'); ?>">
                        
                            <div class="form-group"  >
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username or Email" required="required" autofocus="autofocus">
                                <label for="inputEmail">Username</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                                </label>
                                </div>
                            </div>
 
                                <input class="btn btn-primary btn-block" type="submit" value="login" name="login" >
 
                        
                    </form>
                    <div class="text-center">
                    <a class="d-block small mt-3" href="<?php echo site_url('User') ?>">Register an Account</a>
                    <a class="d-block small" href="<?php echo site_url('User/user_forgot') ?>">Forgot Password?</a>
                    </div>
 
                
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