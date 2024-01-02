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

$title = 'Edit Barang Bantuan Sosial';

include 'layout/header.php';

$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

//tombol tambah
if (isset($_POST['edit'])) {
    if (update_barang($_POST) > 0) {
        echo "<script>
                alert('Data Barang Berhasil Diedit');
                document.location.href = 'barang.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Barang Gagal Diedit');
                document.location.href = 'barang.php';
            </script>";
    }
}
?>
<div class="container mt-3">
    <h1>Edit Barang</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" value="<?= $barang['nama']; ?>" name="nama" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="text" class="form-control" id="stok" value="<?= $barang['stok']; ?>" name="stok" autocomplete="off" required>
        </div>

        <button type="submit" name="edit" class="btn btn-primary" style="float:right;">Edit</button>
    </form>
</div>
<?php
include 'layout/footer.php';
?>