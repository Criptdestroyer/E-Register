<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php $this->load->view("home/_partials/navigation.php") ?>

  <section>
    <div class="container event-photo">
      <div class="col-md-12">
        <img class="img-responsive" src="<?php echo base_url('img/blog-1.jpg');?>" alt="this-event"/>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-4">
          <h1 style="margin-top:1em; font-size:3.5em;">Event Title</h1>
      </div>
    </div>
  </div>

  <section>
    <div class="container mb-3">
        <div class="row">
          <div class="col-md-4">
            <div class="keterangan">
              <div class="my-info">
                <p class="tanggal"><i class="far fa-calendar-alt"></i> tanggal</p>
                <p class="waktuSE"><i class="far fa-clock"></i> waktu</p>
                <p class="tempat"><i class="fas fa-map-marker-alt"></i> Tempat</p>
                <hr>
                <p class="harga">Harga</p>
              </div>
              <a href="#" class="btn btn-primary" role="button">Beli Tiket</a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="deskripsi">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
               velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
               id est laborum.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
               ut labore et dolore magna aliqua.
            </div>
            <hr>
            <div class="Kebijakan">
                <h6>Kebijakan dan Biaya Event</h6>
                <ul>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                    <li>Nananananananananananana</li>
                </ul>
            </div>
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
