<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><?= $judul ?></h1>
                <?= form_open_multipart('user/ubahprofile'); ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?><br>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Pilih Gambar</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <br><button type="submit" class="btn btn-success">Ubah</button>
                        <button class="btn btn-primary" onclick="window.history.go(-1)"> Kembali</button>
                    </div>
                </div>
                </form><br>
            </div>
        </div>
    </div>
</section>