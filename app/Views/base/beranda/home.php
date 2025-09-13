<!-- Categories-SECTION -->
<section class="categories-section overflow-hidden position-relative">
  <figure class="hearts-img">
    <img src="<?php echo base_url() ?>/assets/images/categories-img1.png" alt="" class="star">
  </figure>
  <figure class="design-img">
    <img src="<?php echo base_url() ?>/assets/images/categories-img6.png" alt="" class="star">
  </figure>
  <div class="container">
    <div class="row">
      <!-- Left Content -->
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-lg-1 order-1">
        <div class="about-us-content" data-aos="fade-up">
          <div class="cate-icon-outer">
            <figure class="cate-icon-img mb-0">
              <img src="<?php echo base_url() ?>/assets/images/categories-logo-img.png" alt="">
            </figure>
          </div>
          <h2>Apa yang Akan Kamu Dapatkan?</h2>
          <p class="aboutus-p">
            Semua kebutuhan undangan digital tersedia di sini. Dari tema yang menarik, jadwal acara, hingga buku tamu digital yang elegan.
          </p>
          <div class="banner-btn discover-btn-banner">
            <a href="about.html" class="text-decoration-none">Pelajari Lebih Lanjut</a>
          </div>
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-lg-1 order-1">
        <div class="event-content-img aos-init aos-animate">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/trace_7492697.png" alt="">
                  </figure>
                  <h6>Tema yang Menarik</h6>
                  <p class="p-1">Pilih tema undangan sesuai gaya dan konsep pernikahanmu.</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/book_11358621.png" alt="">
                  </figure>
                  <h6>Cerita Cinta</h6>
                  <p class="p-1">Bagikan kisah perjalanan cintamu dengan tampilan yang elegan.</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/pocket-watch_1717782.png" alt="">
                  </figure>
                  <h6>Jadwal Acara</h6>
                  <p class="p-1">Tampilkan detail waktu akad dan resepsi secara jelas.</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/event-img4.png" alt="">
                  </figure>
                  <h6>Profil Pasangan</h6>
                  <p class="p-1">Perkenalkan kedua mempelai dengan cara yang lebih personal.</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/event-img3.png" alt="">
                  </figure>
                  <h6>Galeri Pre-Wedding</h6>
                  <p class="p-1">Tampilkan momen terbaikmu sebelum hari bahagia.</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="list-unstyled mb-4">
                <li>
                  <figure class="mb-0 icons-fig2">
                    <img src="<?php echo base_url() ?>/assets/images/event-img4.png" alt="">
                  </figure>
                  <h6>Buku Tamu Digital</h6>
                  <p class="p-1">Sediakan ruang bagi ucapan hangat dari para tamu undangan.</p>
                </li>
              </ul>
            </div>
          </div> <!-- row end -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pricing-plan-section overflow-hidden position-relative">
  <div class="banner-container-box">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 order-lg-2 order-1">
          <div class="position-relative sub-banner-section text-center" data-aos="fade-up" id="myContentDIV">
            <h1><span class="h1-text">Pricing Plans</span></h1>
            <p class="banner-paragraph mb-3">
              Pilih paket yang sesuai dengan kebutuhan Anda, dari layanan dasar hingga premium dengan fitur terbaik.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($paket as $data) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
          <div class="services-content aos-init aos-animate" data-aos="fade-up">

            <h3 class="pricing-plan-color mb-2"><?= strtoupper($data->nama_paket) ?></h3>
            <p class="pricing-free-text">Aktif <?= $data->masa_aktif ?> Hari</p>
            <p class="pricing-plane-prices">Rp <?= number_format($data->harga_paket, 0, ',', '.') ?></p>

            <ul class="pricing-list list-unstyled mb-3">
              <li><?= $data->tema_bebas == 0 ? 'Hanya 1 Tema' : 'Bebas Pilih Tema' ?></li>
              <li>Edit Tanpa Batas</li>
              <li <?= $data->kirim_whatsapp != 1 ? 'style="text-decoration:line-through;text-decoration-thickness:2px;"' : '' ?>>Kirim Undangan</li>
              <li <?= $data->import_datatamu != 1 ? 'style="text-decoration:line-through;text-decoration-thickness:2px;"' : '' ?>>Import Data Tamu</li>
              <li <?= $data->buku_tamu != 1 ? 'style="text-decoration:line-through;text-decoration-thickness:2px;"' : '' ?>>Buku Tamu</li>
              <li <?= $data->kirim_hadiah != 1 ? 'style="text-decoration:line-through;text-decoration-thickness:2px;"' : '' ?>>Amplop Digital</li>
              <li>Galeri Foto</li>
              <li>Background Music</li>
            </ul>

            <div class="order-now-btn text-center">
              <a href="<?= base_url() ?>/order" class="btn btn--bordered btn--primary">Buat Undangan</a>
            </div>

          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>



<!-- Form-Section -->

<section class="form-section overflow-hidden">
  <figure class="hearts-img">
    <img src="<?php echo base_url() ?>/assets/images/categories-img1.png" alt="" class="star">
  </figure>
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Intro -->
      <div class="col-xl-6 col-lg-6 col-md-12 mb-4 mb-lg-0">
        <div class="about-us-content" data-aos="fade-up">
          <div class="cate-icon-outer mb-3">
            <figure class="cate-icon-img mb-0">
              <img src="<?php echo base_url() ?>/assets/images/categories-logo-img.png" alt="">
            </figure>
          </div>
          <h2>Langkah Mudah <br> Pembayaran Undangan Digital</h2>
          <p class="aboutus-p">
            Ikuti 4 langkah sederhana berikut untuk melakukan pembayaran dengan cepat dan aman.
          </p>
        </div>
      </div>

      <!-- Steps -->
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="row g-3">

          <!-- Step 1 -->
          <div class="col-md-6">
            <div class="step-card text-center p-4 h-100">
              <div class="step-icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <h6 class="mt-3">1. Pilih Paket</h6>
              <p class="mb-0">Pilih paket undangan sesuai kebutuhan Anda.</p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="col-md-6">
            <div class="step-card text-center p-4 h-100">
              <div class="step-icon">
                <i class="fa fa-credit-card"></i>
              </div>
              <h6 class="mt-3">2. Lakukan Pembayaran</h6>
              <p class="mb-0">Bayar melalui transfer bank atau e-wallet yang tersedia.</p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="col-md-6">
            <div class="step-card text-center p-4 h-100">
              <div class="step-icon">
                <i class="fa fa-check-circle"></i>
              </div>
              <h6 class="mt-3">3. Konfirmasi</h6>
              <p class="mb-0">Upload bukti pembayaran di dashboard.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="col-md-6">
            <div class="step-card text-center p-4 h-100">
              <div class="step-icon">
                <i class="fa fa-paper-plane"></i>
              </div>
              <h6 class="mt-3">4. Undangan Aktif</h6>
              <p class="mb-0">Undangan langsung aktif dan siap dibagikan.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Icons-Section -->
<div class="icons-section py-5">
  <div class="container">
    <div class="row text-center">
      <!-- Pelanggan -->
      <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card shadow-sm border-0 rounded-3 p-4">
          <h3 class="sw-counter display-5 fw-bold text-primary" data-count="<?= $total_users ?>">0</h3>
          <h5 class="mt-2">Pelanggan</h5>
        </div>
      </div>
      <!-- Undangan Dibuat -->
      <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card shadow-sm border-0 rounded-3 p-4">
          <h3 class="sw-counter display-5 fw-bold text-success" data-count="<?= $total_users ?>">0</h3>
          <h5 class="mt-2">Undangan Dibuat</h5>
        </div>
      </div>
      <!-- Desain Undangan -->
      <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card shadow-sm border-0 rounded-3 p-4">
          <h3 class="sw-counter display-5 fw-bold text-warning" data-count="<?= $total_tema ?>">0</h3>
          <h5 class="mt-2">Desain Undangan</h5>
        </div>
      </div>
      <!-- Ulasan -->
      <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card shadow-sm border-0 rounded-3 p-4">
          <h3 class="sw-counter display-5 fw-bold text-danger" data-count="<?= $total_testi ?>">0</h3>
          <h5 class="mt-2">Ulasan</h5>
        </div>
      </div>
    </div>
  </div>
</div>