<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $this->load->view("home/_partials/head.php") ?>
    <?php $this->load->view("home/_partials/CheckoutStyle.php") ?>
  </head>

  <body>

    <!-- Navigation -->
  <?php $this->load->view("home/_partials/navigation.php") ?>
  <?php 
  
    foreach ($customers as $value) {
     if($value->customer_id == $_GET['id']){
  ?>
  <section>
    <div class="container" style="margin-top:6em; height:500px;">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <h4>TERIMAKASIH TELAH MEMBELI TIKET</h4>
          <p>Segera Lakukan Pembayaran sebesar <br/>
             Rp. <?php echo $value->payment ?><br/>
            Melalui Bank Transfer</p>
          <p>BNI<br/>
          09076535426223<br/>
          A.N Ahmad Emir Alfatah</p>
        </div>
      </div>
    </div>
  </section>
    <?php }} ?>
  <script type="text/javascript">

  </script>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
