<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Landing Page - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#">Laut</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if ($user['role'] == 'Admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Mahasiswa/') ?>">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Prodi/') ?>">Prodi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Profil/') ?>">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
