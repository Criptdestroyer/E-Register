<?php
$member_id=$this->session->userdata('member_id');
 
if(!$member_id){
  redirect('user/login_view');
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
  <body class="bg-light">
       <?php $this->load->view("admin/_partials/navbar.php") ?>
 
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo base_url('upload/customer/default.jpeg') ?>" />
                    
                    <h3><?php echo  $this->session->userdata('name'); ?></h3>
                    <p><?php echo $this->session->userdata('email'); ?></p>
                    <p><?php echo $this->session->userdata('no_hp'); ?></p>

                    <a href="<?php echo site_url('User/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
                </div>
            </div>
    </div>
    <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
            </form>

            <?php for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                </div>
            </div>
            <?php } ?>
            
        </div>
</div>

</div>
     <!-- Scroll to Top Button-->
     <?php $this->load->view("admin/_partials/scrolltop.php") ?>

<!-- Logout Modal-->
<?php $this->load->view("admin/_partials/modal.php") ?>

<?php $this->load->view("admin/_partials/js.php") ?>
  </body>
</html>