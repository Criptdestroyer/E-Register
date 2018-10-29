<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php $this->load->view("home/_partials/navigation.php") ?>

    <!-- header -->
    <?php $this->load->view("home/_partials/header.php") ?>
    <?php foreach ($events as $events) {?>
    <section>
      <div class="container" id="halamanevents">
        <div class="row align-items-center myev">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('upload/event/'.$events->photo)?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4"><?php echo $events->title ?></h2>
              <div class="col-lg-5 bg-warning waktu"><?php echo $events->updated_at ?></div>
              <p><?php echo $events->description ?></p>
              <div class="beliinfobutton">
                <a href="#" class="btn btn-success" role="button">Beli Tiket</a>
                <a href="#" class="btn btn-info" role="button">Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
    

  <div class="dicenterin">
      <a href="" class="btn btn-primary btn-xl rounded-pill mb-3">Explore Events</a>
  </div>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
