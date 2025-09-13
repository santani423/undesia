  <!-- BANNER-SECTION -->
  <div
      class="home-banner-section overflow-hidden position-relative sub-baner">
      <figure class="banner-img1 mb-0">
          <img src="./assets/images/banner-img1.png" alt="" class="star" />
      </figure>
      <figure class="banner-img2 mb-0">
          <img src="./assets/images/banner-img2.png" alt="" class="star" />
      </figure>
      <div class="banner-container-box">
          <div class="container">
              <div class="row">
                  <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 order-lg-2 order-1">
                      <div
                          class="position-relative sub-banner-section"
                          data-aos="fade-up"
                          id="myContentDIV">
                          <h1><span class="h1-text"> Undangan Website</span></h1>

                          <div class="banner-btn discover-btn-banner">
                              <div class="btn-inner">
                                  Beranda - <span class="about-margin"> Undangan Website</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="get-in-touch gallery-page">

      <div class="container">
          <div class="banner-btn discover-btn-banner mb-5">
              <a href="<?= site_url('tema') ?>" class="<?php if ($link == 'all') {
                                                            echo 'bg-success text-white';
                                                        } ?>">All</a>

              <?php foreach ($categories as $category) : ?>
                  <a href="<?= site_url('tema?category=' . $category['slug']) ?>" class="<?php if ($link == $category['slug']) echo 'bg-success text-white'; ?>"><?= $category['name'] ?></a>
              <?php endforeach; ?>
          </div>
          <div class="row" data-aos="fade-up ">
              <?php
                foreach ($tema as $row) { ?>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                      <div class="gallery_content">
                          <figure class="contact-form-img">
                              <img
                                  src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png"
                                  alt=""
                                  class="img-fluid" />
                          </figure>
                          <h3><?= htmlentities($row->nama_theme) ?></h3>

                          <div class="banner-btn discover-btn-banner">
                              <a href="<?= base_url('demo/' . $row->nama_theme) ?>" class="text-decoration-none">Demo</a>
                              <a href="<?= base_url('order/' . $row->kode_theme) ?>" class="text-decoration-none">Buat Undangan</a>
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>
          <div class="banner-btn discover-btn-banner mb-5 d-flex justify-content-center">
              <?= $pager->links('tema', 'bootstrap_pagination') ?>
          </div>


      </div>
      <figure class="gallery-design-img">
          <img src="<?php echo base_url() ?>/assets/images/gallery-design-img.png" alt="" />
      </figure>


  </div>