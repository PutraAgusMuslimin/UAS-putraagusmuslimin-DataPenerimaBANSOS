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
$title = 'Tambah Penerima Bantuan Sosial';

include 'layout/header.php';

//tombol tambah
if (isset($_POST['tambah'])) {
    if (create_penerima($_POST) > 0) {
        echo "<script>
                alert('Data penerima Berhasil Ditambahkan');
                document.location.href = 'bansos.php';
            </script>";
    } else {
        echo "<script>
                alert('Data penerima Gagal Ditambahkan');
                document.location.href = 'bansos.php';
            </script>";
    }
}
?>
<div class="container mt-3">
    <h1>Tambah Penerima</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." autocomplete="off" required>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="jk" class="form-label">jenis kelamin</label>
                <select id="jk" name="jk" class="form-select" required autocomplete="off">
                    <option value="">--pilih--</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col 6">
                <label for="telepon" class="form-label">No telepon</label>
                <input type="number" name="telepon" class="form-control" id="telepon" placeholder="08123456789" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="contoh@gmail.com" required autocomplete="off">
            </div>
            <div class="mb-3 col-6">
                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required autocomplete="off">
            </div>
            <div class="mb-3 col 6">
                <label for="golongan" class="form-label">Golongan</label>
                <select id="golongan" name="golongan" class="form-select" required autocomplete="off">
                    <option>--pilih golongan--</option>
                    <option>Kurang mampu</option>
                    <option>Lansia</option>
                    <option>Pelajar</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="contoh : Sopir" autocomplete="off" required>
            </div>
            <div class="mb-3 col 6">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
            </div>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float:right;">Tambah</button>
    </form>
</div>
<?php
include 'layout/footer.php';
?>