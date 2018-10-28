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

    <section>
      <div class="container" id="halamanevents">
        <div class="row align-items-center myev">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('upload/home/01.jpg')?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Event Title</h2>
              <div class="col-lg-5 bg-warning waktu">12 Desember 2017</div>
              <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <div class="beliinfobutton">
                <button type="button" class="btn btn-success">Beli Tiket</button>
                <button type="button" class="btn btn-info">Info</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center myev">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('upload/home/02.jpg')?>" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Event Title</h2>
              <div class="col-lg-5 bg-warning waktu">12 Desember 2017</div>
              <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <div class="beliinfobutton">
                <button type="button" class="btn btn-success">Beli Tiket</button>
                <button type="button" class="btn btn-info">Info</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container myev">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('upload/home/03.jpg')?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Event Title</h2>
              <div class="col-lg-5 bg-warning waktu">12 Desember 2017</div>
              <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <div class="beliinfobutton">
                <button type="button" class="btn btn-success">Beli Tiket</button>
                <button type="button" class="btn btn-info">Info</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <div class="dicenterin">
      <a href="" class="btn btn-primary btn-xl rounded-pill mb-3">Explore Events</a>
  </div>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
