<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center"><?= $judul ?></h1>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Komentar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($komentar as $k) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['email']; ?></td>
                            <td><?= $k['komentar']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>