<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if ($title != 'Beranda') {
            echo $title . ' -';
          } ?> <?= SITE_NAME ?> | Unik, Murah, Modern</title>
  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>/assets/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>/assets/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>/assets/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/images/favicons/favicon-16x16.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="manifest" href="<?php echo base_url() ?>/assets/images/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url() ?>/assets/images/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video.">
  <meta name="keywords" content="undangan digital,undangan online,undangan pernikahan,undangan murah, undangan praktis,undangan nikah,undangan website,creative digital,digital marketing lampung, undangan cetak, udangan kartu,undangan lampung murah,undangan online lampung">
  <meta name="author" content="Undangan Online | Unik, Murah, Modern">
  <meta http-equiv="Copyright" content="Undangan Online | Unik, Murah, Modern">
  <meta name="copyright" content="Undangan Online | Unik, Murah, Modern">
  <meta property="og:type" content="article" />
  <meta property="profile:first_name" content="Undangan Online | Unik, Murah, Modern" />
  <meta property="profile:last_name" content="Undangan Online | Unik, Murah, Modern" />
  <meta property="profile:username" content="Undangan Online | Unik, Murah, Modern" />
  <!-- facebook -->
  <meta property="og:title" content="Undangan Online | Unik, Murah, Modern" />
  <meta property="og:type" content="blog">
  <meta property="og:description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video." />
  <meta property="og:image" content="<?php echo base_url() ?>/assets/base/img/favicon.ico" />
  <meta property="og:url" content="<?php echo base_url() ?>" />
  <meta property="og:site_name" content="Undangan Online | Unik, Murah, Modern" />
  <!-- google -->
  <meta itemprop="name" content="Undangan Online | Unik, Murah, Modern" />
  <meta itemprop="description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video." />



  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/mobile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
    integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
  <style>
    .icons-fig2 img {
      width: 30%;
      /* agar ukurannya 50% dari figure */
      height: auto;
      /* menjaga proporsi gambar */
      display: block;
      margin: 0 auto;
      /* agar gambar center */
    }
  </style>

  <style>
    .theme-label {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: #f5b400;
      /* warna kuning keemasan */
      color: white;
      font-weight: bold;
      font-size: 12px;
      padding: 4px 8px;
      border-radius: 4px;
      z-index: 10;
    }
  </style>
</head>

<body>
  <!-- Tambahkan sebelum penutup </body> -->
<a href="https://wa.me/<?= $setting[0]->no_wa ?>" 
   class="whatsapp-float" 
   target="_blank">
   <i class="fa-brands fa-whatsapp"></i>
</a>

<style>
  .whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 20px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
    z-index: 100;
  }

  .whatsapp-float i {
    margin-top: 15px;
  }

  .whatsapp-float:hover {
    background-color: #20b955;
    color: #fff;
  }
</style>

  <!-- HEADER-SECTION -->
  <div class="home-header-section">
    <!-- <figure class="banner-right-img left_icon img">
            <img src="<?php echo base_url() ?>/assets/images/header-right-img.png" alt="" class="star">
        </figure> -->
    <div class="header-top header-top1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 d-md-block d-sm-none">
            <!-- <div class="header-left d-table-cell align-middle">
                          <div class="phone-icon d-inline-block"><i class="fa-solid fa-phone-volume"></i></div><p class="free-consultation-text">For a free consultation:<a href="tel:+123456789" class="text-decoration-none">0800 123 45 67 890</a></p>
                        </div> -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="header-right float-md-right float-none">
              <ul class="list-unstyled">
                <li class="d-inline-block"><a class="d-inline-block email-span text-decoration-none"
                    href="mailto:info@sencare.com">Folllow us on:</a></li>
                <li class="d-inline-block user-li"><i class="fa-brands fa-facebook-f"></i></li>
                <li class="d-inline-block user-li"><i class="fa-brands fa-twitter"></i></li>
                <li class="d-inline-block user-li"><i class="fa-brands fa-pinterest-p"></i></li>
                <li class="d-inline-block user-li"><i class="fa-brands fa-instagram"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header">
      <div class="main-header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand pt-0" href="<?php if ($title != 'Beranda') {
                                                  echo  '/';
                                                } ?>#"><img src="<?= base_url() ?>/assets/base/img/logo4.png"
                alt="Undangan Online | Unik, Murah, Modern"
                class="img-fluid w-50">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-decoration-none navbar-text-color home-margin-top"
                    href="<?php if ($title != 'Beranda') {
                            echo  '/';
                          } ?>#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-decoration-none navbar-text-color"
                    href="<?php if ($title != 'Beranda') {
                            echo  '/';
                          } ?>#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-decoration-none navbar-text-color"
                    href="<?php if ($title != 'Beranda') {
                            echo  '/';
                          } ?>#themes">Undangan Website</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-decoration-none navbar-text-color"
                    href="<?php if ($title != 'Beranda') {
                            echo  '/';
                          } ?>#themes_video">Undangan Video</a>
                </li>
              </ul>
              <div class="btn-talk ml-auto">
                <ul class="m-0 p-0">
                  <li class="list-unstyled d-lg-inline-block"><a class="nav-link contact"
                      href="<?= base_url('login') ?>">Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <?php
    echo view($view);
    ?>
  </div>











  <div class="footer-section">
    <div class="footer-inner">
      <figure class="mb-0 footer-hearts">
        <img src="<?php echo base_url() ?>/assets/images/footer-birds-img.png" alt="" class="star">
      </figure>
      <div class="footer-msg floating-chat">
        <figure class="mb-0 footer-chat-img">
          <img src="<?php echo base_url() ?>/assets/images/footer-chat-img.png" alt="">
        </figure>
      </div>
      <div class="container">
        <div class="footer-content-box">
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <!-- <h3 class="planning-h3">Let’s Start Planning!</h3> -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="banner-btn discover-btn-banner">
                <!-- <a href="about.html" class="text-decoration-none"><i class="fa fa-clipboard-list"></i>Make Reservations</a> -->
              </div>
              <div class="learn-btn">
                <!-- <a href="about.html" class="text-decoration-none">learn more</a> -->
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-5 col-lg-4 col-md-6 col-sm-12">
            <div class="footer-right-box">
              <a href="<?php if ($title != 'Beranda') {
                          echo  '/';
                        } ?>#" class="text-decoration-none">
                <figure class="footer-logo"><img src="<?php echo base_url() ?>/assets/base/img/logo4.png" alt="" width="100" class="img-fluid"></figure>
              </a>
              <p class="footer-section-text">Undesia adalah layanan undangan pernikahan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. </p>
              <ul class="list-unstyled footer-social-icons">
                <li class="list-item">
                  <!-- Instagram -->
                  <a href="https://www.instagram.com/undesia_id?igsh=OTE1ZmRxc2MxYnl0" target="_blank">
                    <i class="fa-brands fa-instagram marginLeft instagram"></i>
                  </a>

                  <!-- TikTok -->
                  <a href="https://www.tiktok.com/@undes_ia?_t=ZS-8zfB7LKtwWu&_r=1" target="_blank">
                    <i class="fa-brands fa-tiktok marginLeft tiktok"></i>
                  </a>

                  <!-- Gmail -->
                  <a href="mailto:undesia@gmail.com">
                    <i class="fa-solid fa-envelope marginLeft gmail"></i>
                  </a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 d-xl-block d-none"></div>
          <div class="col-xl-3 col-lg-4 col-md-2 col-sm-12 d-lg-block d-none">
            <div class="company-text">
              <p class="company-title">Our Pages </p>
              <ul class="list-unstyled footer-ul1">
                <li>
                  <i class="fa-solid fa-caret-right"></i>
                  <a href="<?php if ($title != 'Beranda') {
                              echo  '/';
                            } ?>#" class="text-decoration-none footer-link-p">
                    Beranda
                  </a>
                </li>
                <li>
                  <i class="fa-solid fa-caret-right"></i>
                  <a href="<?php if ($title != 'Beranda') {
                              echo  '/';
                            } ?>#fitur" class="text-decoration-none footer-link-p">
                    Fitur
                  </a>
                </li>
                <li>
                  <i class="fa-solid fa-caret-right"></i>
                  <a href="<?php if ($title != 'Beranda') {
                              echo  '/';
                            } ?>#themes" class="text-decoration-none footer-link-p">
                    Undangan Website
                  </a>
                </li>
                <li>
                  <i class="fa-solid fa-caret-right"></i>
                  <a href="<?php if ($title != 'Beranda') {
                              echo  '/';
                            } ?>#themes_video" class="text-decoration-none footer-link-p">
                    Undangan Video
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 d-md-block d-none">
            <div class="footer-list footer-link contact-list">
              <div class="icon-list-box1">
                <ul class="list-unstyled contact-us-ul">
                  <li class="list-item">
                    <i class="fa-sharp fa-solid fa-phone-volume footer-location3"></i>
                    <p class="contact-title">Call Us: </p>
                    <a href="tel:+4733378901" class="text-decoration-none footer-link-auto"><?= $setting[0]->no_wa ?></a>
                  </li>
                  <li class="list-item">
                    <i class="fa fa-envelope footer-location3"></i>
                    <p class="contact-title">Email Us:</p>
                    <a href="mailto:<?= $setting[0]->email ?>" class="text-decoration-none footer-link-auto"><?= $setting[0]->email ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-12">

          </div>
          <div class="col-lg-7 col-md-6 col-sm-12">
            <p class="footer-end-text">Copyright ©2025</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/animations.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/owl.carousel.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/text-animations.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
  <script src="https://unpkg.com/ityped@0.0.10"></script>
  <script src="<?php echo base_url() ?>/assets/js/type.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/custom-script.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/video-popup.js"></script>
</body>

</html>