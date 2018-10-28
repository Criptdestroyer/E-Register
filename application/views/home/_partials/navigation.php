<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <img src="<?php echo base_url('upload/home/logo.png') ?>" width="40px">
        <a class="navbar-brand" href="<?php echo site_url('home/index') ?>"><?php echo SITE_NAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Home/pesan') ?>">Event</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="#<?php// echo site_url('User/index') ?>">Cek Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('User/user_profile') ?>">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('User/index') ?>">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>