<?php
session_start();
//batasi halaman
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu');
            document.location.href = 'login.php';
          </script>";
    exit;
}
$title = 'Tambah barang Bantuan Sosial';

include 'layout/header.php';

//tombol tambah
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
        echo "<script>
                alert('Data Barang Berhasil Ditambahkan');
                document.location.href = 'barang.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Barang Gagal Ditambahkan');
                document.location.href = 'barang.php';
            </script>";
    }
}
?>
<div class="container mt-3">
    <h1>Tambah barang</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="text" class="form-control" id="stok" name="stok" autocomplete="off" required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float:right;">Tambah</button>
    </form>
</div>
<?php
include 'layout/footer.php';
?>