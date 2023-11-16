<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- css -->
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href=" <?= base_url('assets/src/style.css') ?>" />
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-light shadow">
      <div class="container-fluid px-3">
        <!-- judul navbar -->
        <a href="<?= base_url('index.php/C_dashboard'); ?>" class="navbar-brand fw-medium">Dashboard</a>
        <!-- navbar -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown px-2">
            <a class="nav-link" href="<?php echo base_url('index.php/C_anggaran') ?>"> Anggaran </a>
          </li>
         
        </ul>
        
        <!-- end navbar -->

        <!-- Profile icon -->
        <div class="dropstart">
          <div class="ms-auto profile-icon-container" data-bs-toggle="dropdown">
            <img
              src=" <?= base_url('assets/img/profile.png') ?>"
              width="50px"
              height="50px"
              class="profile-icon"
              alt=""
            />
            <ul class="dropdown-menu">
              <li>
							 <p
                  onclick="location.href='<?php echo base_url('index.php/C_login/logout')?>'"
                  class="dropdown-item-text dropdown-start"
                >
                  Logout
                </p>	
							</li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
