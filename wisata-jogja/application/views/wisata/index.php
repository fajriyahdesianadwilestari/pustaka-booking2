<!-- Header-->
<header class="bg-home py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center">
                    <h1 class="display-5 fw-bolder text-white mb-2 text-center">Selamat Datang di <br>Website Informasi Pariwisata Yogyakarta</h1>
                    <p class="lead fw-normal text-white mb-4 text-center">visit Yogyakarta</p>
                    <a class="btn btn-primary btn-lg" href="#features">Jelajahi</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Ada apa sih di Jogja?</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-image-alt"></i></div>
                        <h2 class="h5">Wisata Jogja</h2>
                        <p class="mb-0">Keindahan jogja memang tak ada tandingannya, penduduk yang ramah tentunya membuat wisatawan nyaman.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h5">Wisata Sejarah</h2>
                        <p class="mb-0">Sejarah jogjakarta yang sangat berkesan membuat kita selalu bangga atas pencapaian bangsa kita saat ini.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-bag"></i></div>
                        <h2 class="h5">Belanja</h2>
                        <p class="mb-0">Oleh - oleh khas jogja yang beraneka macam</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-bucket-fill"></i></div>
                        <h2 class="h5">Wisata Kuliner</h2>
                        <p class="mb-0">Makanan khas jogja memang selalu memberikan kesan tersendiri bagi penikmatnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Bagi mereka yang bersedih, lihatlah keindahan alam. Bagi mereka yang merasa sempit, lihatlah luasnya semesta dan pergi ke Jogja."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="fw-bold">
                            - Pariwisata Jogja
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Wisata Jogja</h2>
                    <p class="lead fw-normal text-muted mb-5">Berikut ini adalah wisata yang ada di yogyakarta</p>
                </div>
            </div>
        </div>
        <div class="wisata">
            <div class="row gx-5">
                <?php
                foreach ($wisata_umum as $w) { ?>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/img/upload/<?= $w['gambar']; ?>" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3"><?= $w['nama_wisata']; ?></h5>
                                </a>
                                <p class="card-text mb-0"><?= $w['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <h4>Apakah Anda Admin? <a href="<?= base_url('admin'); ?>">Klik Disini</a> Jika ingin menuju ke halaman admin</h4>
    </div>
</section>
</main>