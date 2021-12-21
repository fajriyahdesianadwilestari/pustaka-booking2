<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder"><?= $judul ?></h1>
                <p class="lead fw-normal text-muted mb-0">Saran Dan komentar anda sangat berarti bagi kami.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?= $this->session->flashdata('pesan'); ?>
                    <?php unset($_SESSION['pesan']); ?>
                    <form action="<?= base_url('wisata/komentar'); ?>" method="post" enctype="multipart/form-data" id="contact-form">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            <label for="email">Email address</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="komentar" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" name="komentar"></textarea>
                            <label for="komentar">Komentar</label>
                            <?= form_error(
                                'komentar',
                                '<small class="text-danger pl-3">',
                                '</small>'
                            ); ?>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</main>