<?php
session_start();
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu');
            document.location.href = 'login.php';
          </script>";
    exit;
}

$title = 'Depan';

include 'layout/header.php';
?>


<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row text-decoration-none">
                <!-- ./col -->
                <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 2) : ?>
                    <div class="col-lg-3 col-6 text-center">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner ">
                                <h3>Data Barang</h3>

                                <p>Bantuan Sosial</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="barang.php" class="small-box-footer text-white text-decoration-none">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- ./col -->

                <div class="col-lg-3 col-6 text-center">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner ">
                            <h3>Data Penerima</h3>

                            <p>Bantuan Sosial</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="bansos.php" class="small-box-footer text-white text-decoration-none">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6 text-center">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner ">
                            <h3>Data Akun</h3>

                            <p>Bantuan Sosial</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="akun.php" class="small-box-footer text-white text-decoration-none">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--plugin-->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>



<?php
include 'layout/footer.php';
?>