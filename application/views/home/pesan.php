<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php $this->load->view("home/_partials/navigation.php") ?>

  <div class="container">
       <h1 style="text-align:center; margin-top:2.5em; font-size:3.5em;">EVENTS</h1>
       Select Time : <select name="pilih sortir">
           <option value="anytime">anytime</option>
           <option value="this month">this month</option>
           <option value="next month">next month</option>
       </select>
  </div>

    <!--<section>
        <div class="container">
              <div class="panel panel-default card">

              <div class="panel-heading post-thumb">
                  <img class="img img-responsive" src="<?php echo base_url('img/EvPhoto.jpg')?>" />
              </div>

              <div class="panel-body post-body">
                  <h3 class="post-title">
                      <a href="#">Judul Artikel</a>
                  </h3>
                  <div class="post-author">
                      <p>Tanggal dan Tempat</a>
                  </div>
                  <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                      laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                       voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                       anim id est laborum.
                  </div>
              </div>

            </div>
      </div>
    </section>-->

    <section>
      <div class="container mb-3 mt-2">
        <div class="card evcard" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo base_url('img/EvPhoto.jpg')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <div class="card-title tanggal" style="color:red;">
              dd-Month-yyyy <br/>
              Place
            </div>
            <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="card-header beliinfobutton">
            <a href="#" class="btn btn-success" role="button">Beli Tiket</a>
            <a href="<?php echo site_url('Home/info') ?>" class="btn btn-info" role="button">Info</a>
          </div>
      </div>
      </div>
    </section>


    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
