<?php

include 'config/app.php';


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <a href="depan.php" class="text-decoration-none">
                        <h6 class="text-white">Bantuan Sosial</h6>
                    </a>
                    <ul class="navbar-nav">
                        <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 2) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="barang.php">
                                    <h6>Barang</h6>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="bansos.php">
                                <h6>Penerima</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="akun.php">
                                <h6>Akun</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="logout.php">
                                <h6>Keluar</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="navbar-brand text-white" href="#"><?= $_SESSION['nama'] ?></a>
                </div>
            </div>
        </nav>
    </div>