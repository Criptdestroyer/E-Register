<?php
$member_id=$this->session->userdata('member_id');
 
if($member_id){
  redirect('user/user_profile');
}
?>

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
 

  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="card card-register mx-auto mt-5"><!-- row class is used for grid system in Bootstrap-->
          
              <div class="login-panel panel panel-success">
              <div class="card-header"><h4><span ><a href="<?php echo site_url('home/index') ?>" text-decoration="none"><?php echo SITE_NAME?></a></span>~Register</h4></div>
                  <div class="card-body">
 
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
 
                      <form role="form" method="post" action="<?php echo site_url('user/register_user'); ?>">
                          
                            <div class="form-group">
                            <div class="form-row">
                            <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                            </div> 
                            <div class="col-md-6">
                             <div class="form-label-group">
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="text" name='username' id="inputUsername"  class="form-control" placeholder="Username" required="required">
                                <label for="inputUsername">Username</label>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                                <label for="inputEmail">Email address</label>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-row">
                                <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Password</label>
                                </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                            </div>
                            </div>
                            </div>
 
                              <!-- <div class="form-group">
                                  <input class="form-control" placeholder="Age" name="user_age" type="number" value="">
                              </div> -->
 
                              <div class="form-group">
                                  <input class="form-control" name="no_hp" placeholder="Mobile No" name="no_hp" type="number" value="">
                              </div>
 
                              <input class="btn btn-primary btn-block" type="submit" value="Register" name="register" >
                      </form>
                      <div class="text-center">
                    <a class="d-block small mt-3" href="<?php echo site_url('User/login_view') ?>">Login Page</a>
                    <a class="d-block small" href="<?php echo site_url('User/user_forgot') ?>">Forgot Password?</a>
                    </div> 
                  </div>
              </div>
          
      </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>