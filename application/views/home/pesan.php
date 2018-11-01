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
                  <img class="img img-responsive" src="<?php// echo base_url('img/EvPhoto.jpg')?>" />
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
    <?php foreach ($events as $events) {?>
    <section>

      <div class="col-md-3 mt-2 mb-2">
        <div class="card evcard" style="width: 18rem;">
          <img class="card-img-top img-responsive" src="<?php echo base_url('upload/event/'.$events->photo)?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $events->title ?></h5>
            <div class="card-title tanggal" style="color:red;">
            <?php echo $events->updated_at ?><br/>
            <?php echo $events->details ?>
            </div>
            <p class="card-text desc"><?php echo substr($events->description, 0, 120) ?>...</p>
          </div>
          <div class="card-header beliinfobutton">

            <a href="<?php echo site_url('Home/info?id='.$events->event_id) ?>" class="btn btn-info" role="button">More Info</a>

          </div>
      </div>

      </div>

    </section>
    <?php } ?>

    <!-- Footer -->
    <?php $this->load->view("home/_partials/footer.php") ?>

    <!-- Bootstrap core JavaScript -->
    <?php $this->load->view("home/_partials/js.php") ?>

  </body>

</html>
