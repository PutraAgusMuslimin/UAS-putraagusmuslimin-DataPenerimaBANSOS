<?php

$title = 'Dasboard';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <title>Dasboard</title>
</head>

<body>
    <div>
        <header class="p-3 bg-primary text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    </a>

                    <img src="assets/img/sosial.png" alt="" width="60" height="50">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-dark">
                                <h5>Home</h5>
                            </a></li>
                        <li><a href="#" class="nav-link px-2 text-white">
                                <h5>Pendaftaran</h5>
                            </a></li>
                        <li><a href="#" class="nav-link px-2 text-white">
                                <h5>Program</h5>
                            </a></li>
                        <li><a href="#" class="nav-link px-2 text-white">
                                <h5>Tentang kami</h5>
                            </a></li>
                        <li><a href="#" class="nav-link px-2 text-white">
                                <h5>Kontak</h5>
                            </a></li>
                    </ul>

                    <a href="login.php"><button type="button" class="btn btn-outline-danger">Login</button></a>
                </div>
        </header>

        <div class="container">

            <figure class="text-center mt-4">
                <blockquote class="blockquote">
                    <p>Program Bantuan Sosial</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Desa Sungai Pulai</cite>
                </figcaption>
            </figure>
            <h1>Kependudukan dan Bantuan Sosial</h1>
            <p>
                Sistem Kependudukan dan Bantuan Sosial merupakan suatu sistem yang dapat mengubah dan mengolah data penerima bantuan di Desa Sungai Pulai.

                Program bantuan sosial dirancang pemerintah untuk mendukung kesejahteraan masyarakat.
                Dengan adanya program ini semoga dapat membantu masyarakat ekonomi rendah. Penyebab kemiskinan dapat terjadi karena kondisi alamiah dan
                ekonomi, kondisi struktural dan sosial, serta kondisi kultural (budaya). Kemiskinan alamiah dan ekonomi timbul akibat keterbatasan sumber daya alam, manusia,
                dan sumberdaya lain sehingga peluang produksi relatif kecil dan
                tidak dapat berperan dalam pembangunan.</p>
            <a href="login.php" class="btn btn-danger"><i class="fas fa-bullhorn"></i> Lihat Daftar Penerima Bantuan</a>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--plugin-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</body>

</html>