<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jogja | <?= $judul ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>assets/icon.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/jogja.css" rel="stylesheet" />
    <style>
        .bg-home {
            background-image: url("<?php echo base_url() ?>assets/img/tugu-jogja.jpg");
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url('wisata'); ?>">Pariwisata Yogyakarta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('wisata'); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('wisata/sejarah'); ?>">Wisata Sejarah</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('wisata/belanja_kuliner'); ?>">Belanja & kuliner</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('wisata/komentar'); ?>">Komentar</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> Akun</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="bi bi-person-lines-fill"></i> Profile Saya</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('autentifikasi'); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>