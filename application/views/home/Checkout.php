<?php
$member_id=$this->session->userdata('member_id');

if(!$member_id){
  redirect('user/login_view');
}

 ?>

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
    $query = $this->db->query('select * from tiket')->result();
    foreach ($events as $events) {
    if($events->event_id == $_GET['id']){
    ?>
  <section>
    <div class="container" style="margin-top:6em;">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form method="post" action="<?php echo site_url('bayar/add'); ?>">
          <div class="biodata" style="text-align:center">
            <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo base_url('upload/customer/default.jpeg') ?>" />
            <p><?php echo  $this->session->userdata('name'); ?></p>
            
            <p><?php echo $this->session->userdata('email'); ?></p>
            
            <p><?php echo $this->session->userdata('no_hp'); ?></p>
            
          </div>
          <div class="keterangan-pembelian text-left">
            <h6>Anda Membeli Tiket</h6>
            <div>
            
              <input type="hidden" name="name" value="<?php echo $this->session->userdata('name')?>" />
              <input type="hidden" name="email" value="<?php echo $this->session->userdata('email')?>" />
              <input type="hidden" name="no_hp" value="<?php echo $this->session->userdata('no_hp')?>" />
              <input type="hidden" name="jumlah_tiket" value="<?php echo 1?>" />
              
            
              <span class="label">Event</span><br/>
              <span class="nilai_label"><?php echo $events->title ?></span><br/>
              
              <span class="label">Date</span><br/>
              <span class="nilai_label"><?php echo $events->updated_at ?></span><br/>
              
              <span class="label">Time</span><br/>
              <span class="label"><?php echo $events->updated_at?> </span></span><br/>
          
              <span class="label">Place</span><br/>
              <span class="nilai_label"><?php echo $events->details ?></span><br/>
              
              <span class="label">Jenis tiket</span><br/>
              <span class="nilai_label"><?php echo $_POST['jenis_tiket'] ?></span><br/>
              
            </div>
          </div>
          <div class="membayar" style="text-align:center;">
            <p>Anda harus Membayar</p>
            <?php foreach ($query as $query) {
               if($events->event_id == $query->id_event && $query->jenis_tiket == $_POST['jenis_tiket']){
               
               ?>
            <p class="harga">Rp.<?php echo $query->harga ?></p>
            <input type="hidden" name="payment" value="<?php echo $query->harga ?>"/>

          <?php }} ?>
          </div>
          <div class="bagian_tombol" style="text-align:center;">
            <a href="<?php echo site_url('admin/Customers'); ?>" class="btn btn-info" role="button">Bayar</a>
            <a href="<?php echo site_url('Home/info?id='.$events->event_id)?>" class="btn btn-danger" role="button">Batal</a>
          </div>
      </form>
      </div>
    </div>
  </div>
  </section>
<?php }

} ?>
  <script type="text/javascript">

  </script>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>
  </body>

</html>
