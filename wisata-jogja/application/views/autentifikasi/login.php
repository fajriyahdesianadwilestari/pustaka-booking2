<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                        <?php echo $this->session->flashdata('pesan') ?>
                        <?php unset($_SESSION['pesan']); ?>
                        <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" value="<?= set_value('email'); ?>" id="email" placeholder="Email" name="email">
                                <label for="email">Email</label>
                                <?= form_error(
                                    'email',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <?= form_error(
                                    'password',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button>
                                <a class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2 mt-3" href="<?= base_url('autentifikasi/registrasi'); ?>">
                                    Registrasi
                                </a>
                            </div>
                        </form>
                        <a href="<?= base_url('wisata'); ?>">Kembali Ke halaman informasi wisata</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>