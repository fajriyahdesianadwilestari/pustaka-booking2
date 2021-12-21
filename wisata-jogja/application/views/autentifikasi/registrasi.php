<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-6 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Registrasi</h5>
                        <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>">
                                <label for="floatingInputUsername">Nama Lengkap</label>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <label for="floatingInputEmail">Alamat Email</label>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <hr>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <?= form_error(
                                    'password1',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
                                <label for="floatingPasswordConfirm">Ulangi Password</label>
                                <?= form_error(
                                    'password2',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>

                            </div>

                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrasi</button>
                            </div>

                            <a class="d-block text-center mt-2 small" href="<?= base_url('autentifikasi'); ?>">Sudah Punya Akun? Login</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>