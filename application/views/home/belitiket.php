<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php $this->load->view("home/_partials/navigation.php") ?>
  <?php foreach ($events as $events) {
    if($events->event_id == $_GET['id']){
   ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-4">
          <h1 style="margin-top:1em; font-size:3.5em;">Pembelian Tiket</h1>
      </div>
    </div>
  </div>

  <section>
    <div class="container mb-3">
        <div class="row">
          <div class="col-md-4">
            <div class="keterangan">
              <div class="my-info">
                <p class="tanggal"><i class="far fa-calendar-alt"></i> <?php echo $events->updated_at ?></p>
                <p class="waktuSE"><i class="far fa-clock"></i> 08.00</p>
                <p class="tempat"><i class="fas fa-map-marker-alt"></i> <?php echo $events->details ?></p>
                <hr>
                <p class="harga">Rp. 100.000</p>
              </div>
              <!--<a href="#" class="btn btn-primary" role="button">Beli Tiket</a>-->
            </div>
          </div>
          <div class="col-md-8">
            <div class="deskripsi">
            <?php echo $events->description ?>
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
<?php }} ?>
    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
