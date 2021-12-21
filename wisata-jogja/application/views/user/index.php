<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <?php echo $this->session->flashdata('pesan') ?>
        <?php unset($_SESSION['pesan']); ?>
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="profile" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="...">
                <h1><?= $judul ?></h1>
            </div>
        </div>
        <div class="row bg-light text-center">
            <div class="col-sm-3 offset-2">
                <h3>Nama</h3>
            </div>
            <div class="col-sm-1">
                <h3>:</h3>
            </div>
            <div class="col-sm-4">
                <h3><?= $user['nama']; ?></h3>
            </div>

            <div class="col-sm-3 offset-2">
                <h3>Email</h3>
            </div>
            <div class="col-sm-1">
                <h3>:</h3>
            </div>
            <div class="col-sm-4">
                <h4><?= $user['email']; ?></h4>
            </div>

            <div class="col-sm-12 mt-3">
                <p class="text-center">Bergabung dengan kami sejak :<br> <?= date('d F Y', $user['tanggal_input']); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="<?= base_url('user/ubahprofile'); ?>" class="btn btn-success"><i class="fas fa-user-edit"></i> Ubah Profile</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#LogoutModal">
                    <a href="<?= base_url('autentifikasi/logout'); ?>" class="text text-white"></a>Logout
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pilih "Logout" di bawah jika kamu yakin sudah selesai.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="<?= base_url('autentifikasi/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>