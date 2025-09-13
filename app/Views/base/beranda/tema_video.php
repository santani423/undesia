<div class="home-banner-section overflow-hidden position-relative sub-baner">
    <figure class="banner-img1 mb-0">
        <img src="./assets/images/banner-img1.png" alt="" class="star" />
    </figure>
    <figure class="banner-img2 mb-0">
        <img src="./assets/images/banner-img2.png" alt="" class="star" />
    </figure>
    <div class="banner-container-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 order-lg-2 order-1">
                    <div class="position-relative sub-banner-section" data-aos="fade-up" id="myContentDIV">
                        <h1><span class="h1-text"> Undangan Video</span></h1>

                        <div class="banner-btn discover-btn-banner">
                            <div class="btn-inner">
                                Beranda - <span class="about-margin"> Undangan Video</span>
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
        <div class="banner-btn discover-btn-banner mb-5 text-center">
            <a href="<?= site_url('tema_video') ?>" class="<?php if ($link == 'all') {
                                                                echo 'bg-success text-white';
                                                            } ?>">All</a>

            <?php foreach ($categories as $category) : ?>
                <a href="<?= site_url('tema_video?category=' . $category['slug']) ?>"
                    class="<?php if ($link == $category['slug']) echo 'bg-success text-white'; ?>">
                    <?= $category['name'] ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="row" data-aos="fade-up">
            <?php foreach ($tema_video as $row) { ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                    <div class="gallery_content">
                        <figure class="contact-form-img">
                            <span class="theme-label"><?= $row->categoryName ?></span>
                            <img src="<?php echo base_url() ?>/assets/themes_video/<?= $row->preview ?>" alt="" class="img-fluid" />
                        </figure>
                        <h4><?= htmlentities($row->nama_tema) ?></h4>
                        <p>Rp. <?= number_format($row->harga) ?></p>
                        <div class="banner-btn discover-btn-banner">
                            <a type="button" class="btn btn-primary btn-demo" data-toggle="modal" data-target="#exampleModalCenter"
                                data-link="<?= htmlentities($row->url_video); ?>"
                                data-nama="<?= $row->nama_tema; ?>"
                                data-type="<?= pathinfo($row->url_video, PATHINFO_EXTENSION); ?>">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=<?= $setting[0]->no_wa; ?>&text=Assalamualaikum, Kak saya mau pesan Undangan video <?= $row->nama_tema ?>%0ABagaimana cara pesannya kak?"
                                class="btn sw-button btn-shop-2 btn-shop btn-details" title="Pesan Sekarang">
                                <i class="fa fa-shopping-basket"></i>
                            </a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nama_tema">Preview Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="video-container"></div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const demoButtons = document.querySelectorAll(".btn-demo");

        demoButtons.forEach(btn => {
            btn.addEventListener("click", function() {
                let videoUrl = this.getAttribute("data-link");
                let namaTema = this.getAttribute("data-nama");
                let fileType = this.getAttribute("data-type").toLowerCase();

                // Masukkan nama tema
                document.getElementById("nama_tema").textContent = namaTema;

                let videoContainer = document.getElementById("video-container");
                videoContainer.innerHTML = ""; // kosongkan dulu

                if (fileType === "mp4") {
                    videoContainer.innerHTML = `
                        <video controls autoplay class="w-100">
                            <source src="${videoUrl}" type="video/mp4">
                            Browser Anda tidak mendukung video tag.
                        </video>
                    `;
                } else {
                    videoContainer.innerHTML = `
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="demo-video" class="embed-responsive-item" src="${videoUrl}?autoplay=1" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    `;
                }
            });
        });

        // Bersihkan video saat modal ditutup
        $('#exampleModalCenter').on('hidden.bs.modal', function() {
            stopVideo();
        });
    });

    function stopVideo() {
        document.getElementById("video-container").innerHTML = "";
    }
</script>