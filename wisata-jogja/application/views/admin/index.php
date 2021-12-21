<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Wisata</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Wisata</li>
            </ol>
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= validation_errors(); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php unset($_SESSION['pesan']); ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
                Tambah Data Wisata
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($wisata as $w) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $w['nama_wisata']; ?></td>
                            <td><?= $w['deskripsi']; ?></td>
                            <td>
                                <img src="<?= base_url('assets/img/upload/') . $w['gambar']; ?>" alt="" class="img-thumbnail img-fluid">
                            </td>
                            <td class="bg-dark">
                                <a href="<?= base_url('admin/editpariwisata/') . $w['id_wisata']; ?>" class=" badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('admin/hapus_wisata/') . $w['id_wisata']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $w['nama_wisata']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="Masukkan nama wisata"><br>
                        </div>
                        <div class="mb-3">
                            <label for="deksripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">Gambar
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>