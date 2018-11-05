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

  <section>
    <div class="container event-photo">
      <div class="col-md-12" style="height:375px;">
        <img class="img-fluid myimage" style="" src="<?php echo base_url('upload/event/'.$events->photo);?>" alt="this-event"/>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-4">
          <h1 style="margin-top:1em; font-size:3.5em;"><?php echo $events->title ?></h1>
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
                <?php
                    $query = $this->db->query('select * from tiket')->result();
                    foreach ($query as $query) {
                        if($events->event_id == $query->id_event){
                            echo "<p class='harga' style='font-weight:bold;color:yellow;font-size:20px'>".$query->jenis_tiket.": ".$query->harga."</p>";
                        }} ?>

              </div>
            ,<!--  <a href="#" class="btn btn-primary" role="button">Beli Tiket</a> -->
            </div>
          </div>
          <div class="col-md-8">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kebijakan</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Beli</a>
              </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="deskripsi">
                <?php echo $events->description ?>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="beli-tiket">
                  <table>

                    <form method="post" action="<?php echo site_url('Home/checkout?id='.$events->event_id) ?>">
                    <input type="hidden" name="event_id" value="<?php echo $events->event_id?>" />
                      <tr>
                          <td>Event</td>
                          <td style="font-weight:bold;"><?php echo $events->title ?></td>
                      </tr>
                      <tr>
                          <td>Jenis tiket</td>
                          <td>
                              <select name="jenis_tiket">
                              <?php
                              $query = $this->db->query('select * from tiket')->result();
                              $temp;
                              foreach ($query as $query) {
                              if($events->event_id == $query->id_event){
                              echo "<option value='".$query->jenis_tiket."'>".$query->jenis_tiket."</option>";
                                $temp =$query->jenis_tiket;
                              }} ?>
                              </select>
                          </td>
                      </tr>

                      <!-- <tr>
                          <td>Jumlah Tiket</td>
                          <td>
                            <button type="button" class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                            <input type="text" id="number" value="0" style="width:40px; text-align:center;" />
                            <button type="button" class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                          </td>
                      </tr> -->
                      <br>
                      <tr style="text-align:center;">
                        <td colspan="2"><input type="submit" value="Beli" name="submit" class="submitreset bg-primary"/>
                          <input type="reset" value="Reset" name="reset" class="submitreset bg-primary"/></td>
                      </tr>
                    </form>
                  </table>
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
    </div>
  </section>

<!--  <script type="text/javascript">
    function increaseValue() {
      var value = parseInt(document.getElementById('number').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('number').value = value;
      }

      function decreaseValue() {
      var value = parseInt(document.getElementById('number').value, 10);
      value = isNaN(value) ? 0 : value;
      value < 1 ? value = 1 : '';
      value--;
      document.getElementById('number').value = value;
    }
  </script>-->

<?php }} ?>
    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
