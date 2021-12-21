<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1><?= $judul ?></h1>
            <?php
            foreach ($wisata as $p) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pariwisata</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar Lama</th>
                            <th scope="col">Gambar Baru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="<?= base_url('admin/editpariwisata'); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="old_pict" value="<?= $p['gambar']; ?>">
                                <input type="hidden" name="id_wisata" value="<?= $p['id_wisata']; ?>">
                                <th scope="row">#</th>

                                <td>
                                    <div class="form-group">
                                        <label for="judul_buku">Nama Wisata</label>
                                        <input type="text" class="form-control formcontrol-user" id="nama_wisata" name="nama_wisata" placeholder="Masukkan Nama wisata" value="<?= $p['nama_wisata']; ?>"><br>
                                    </div>
                                </td>
                                <td><label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" rows="10" width="280" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi"><?= $p['deskripsi']; ?></textarea>
                                </td>
                                <td>
                                    <img src="<?= base_url('assets/img/upload/') . $p['gambar']; ?>" class="img-thumbnail" width="250" alt="...">
                                </td>
                                <td width="250"> <input class=" form-control" type="file" id="gambar" name="gambar"></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
            <div class="form-group float-right mt-3">
                <a href="<?= base_url('admin'); ?>" class="btn btn-secondary"><i class="fas fa-ban"></i> Batal</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
            </div>
            </form>
        </div>
    </main>