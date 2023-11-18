<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <!-- cdn bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/src/style.css') ?>" />
  </head>
  <body class="overflow-hidden">
		
  <?php
		if($this->session->flashdata('pesan')){
echo '<div class="w-50 mx-auto py-3">
	<div class="bg-warning rounded alert alert-warning alert-dismissible fade show">
		<span class="text-center text-gray fw-semibold ">⚠';
		echo $this->session->flashdata('pesan');
echo '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>';
}
	?>
    <!-- logo -->
    <div class="logo-login text-center d-md-block" hidden>
      <img src="<?= base_url('assets/img/logo.svg') ?>" width="90px" alt="" class="mx-auto" />
    </div>

    <!-- card login -->
    <section class="pt-5">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl-12">
            <div class="card card-login mx-auto border border-dark shadow">
              <h1 class="card-login-h1 fw-semibold text-center">
                Selamat Datang di Emonev
              </h1>
              <p class="fw-light card-login-p text-center">
                Satuan Polisi Pamong praja
              </p>
              <p class="card-login-text-p">Masukan Username dan Password</p>

              <!-- input username -->
              <form method="POST" action="<?php echo base_url('index.php/C_login')?>">
              <div class="col-9 mx-auto pt-3">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"
                    ><img src="<?= base_url('assets/img/icon-email.svg') ?>" alt=""
                  /></span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Masukan Username"
                    name="username"
                    id="username"
                  />
                </div>
              </div>

              <div class="col-9 mx-auto">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"
                    ><img src="<?= base_url('assets/img/icon-password.svg') ?>" width="31px" alt=""
                  /></span>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Masukan Password"
                    name="password"
                    id="password"
                  />
                </div>
              </div>

              <div class="button-login text-center">
                <button class="btn btn-primary btn-login">Masuk</button>
              </div>
            </form>
            </div>
          </div>
        </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
