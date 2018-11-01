<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
    <?php $this->load->view("home/_partials/CheckoutStyle.php") ?>
  </head>

  <body>

    <!-- Navigation -->
  <?php $this->load->view("home/_partials/navigation.php") ?>

  <section>
    <div class="container" style="margin-top:6em;">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form method="post" action="">
          <div class="biodata" style="text-align:center">
            <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo base_url('img/EvPhoto.jpg'); ?>" />
            <p>Nama</p>
            <p>No member</p>
            <p>No HP</p>
          </div>
          <div class="keterangan-pembelian text-left">
            <h6>Anda Membeli Tiket</h6>
            <div>
              <span class="label">Event</span><br/>
              <span class="nilai_label">Nama Event</span><br/>
              <span class="label">Date</span><br/>
              <span class="nilai_label">Tanggal Event</span><br/>
              <span class="label">Time</span><br/>
              <span class="nilai_label">Waktu Event</span><br/>
              <span class="label">Place</span><br/>
              <span class="nilai_label">Lokasi Event</span><br/>
              <span class="label">Jenis tiket</span><br/>
              <span class="nilai_label">VIP/Reguler</span><br/>
            </div>
          </div>
          <div class="membayar" style="text-align:center;">
            <p>Anda harus Membayar</p>
            <p class="harga">Rp 0</p>
          </div>
          <div class="bagian_tombol" style="text-align:center;">
            <a href="" class="btn btn-info" role="button">This Is Button</a>
          </div>
      </form>
      </div>
    </div>
  </div>
  </section>

  <script type="text/javascript">

  </script>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
