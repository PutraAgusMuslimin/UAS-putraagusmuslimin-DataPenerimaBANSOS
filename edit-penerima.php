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

$title = 'Edit Penerima Bantuan Sosial';

include 'layout/header.php';

//tombol edit
if (isset($_POST['edit'])) {
    if (update_penerima($_POST) > 0) {
        echo "<script>
                alert('Data penerima Berhasil Diedit');
                document.location.href = 'bansos.php';
            </script>";
    } else {
        echo "<script>
                alert('Data penerima Gagal Diedit');
                document.location.href = 'bansos.php';
            </script>";
    }
}

$id_bansos = (int)$_GET['id_bansos'];

$data = select("SELECT * FROM data_bansos WHERE id_bansos = $id_bansos")[0];

?>
<div class="container mt-3">
    <h1>Edit Penerima</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_bansos" value="<?= $data['id_bansos']; ?>">
        <input type="hidden" name="gambarlama" value="<?= $data["gambar"]; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." autocomplete="off" required value="<?= $data['nama']; ?>">
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="jk" class="form-label">jenis kelamin</label>
                <select id="jk" name="jk" class="form-select" required autocomplete="off">
                    <?php $jk = $data['jk']; ?>
                    <option value="Laki-laki" <?= $jk == 'Laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $jk == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col 6">
                <label for="telepon" class="form-label">No telepon</label>
                <input type="number" name="telepon" class="form-control" id="telepon" placeholder="08123456789" required autocomplete="off" value="<?= $data['telepon']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="contoh@gmail.com" required autocomplete="off" value="<?= $data['email']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off" value="<?= $data['tanggal_lahir']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required autocomplete="off" value="<?= $data['alamat']; ?>">
            </div>
            <div class="mb-3 col 6">
                <label for="golongan" class="form-label">Golongan</label>
                <select id="golongan" name="golongan" class="form-select" required autocomplete="off">
                    <?php $golongan = $data['golongan']; ?>
                    <option value="Kurang mampu" <?= $golongan == 'Kurang-mampu' ? 'selected' : null ?>>Kurang mampu</option>
                    <option value="Lansia" <?= $golongan == 'Lansia' ? 'selected' : null ?>>Lansia</option>
                    <option value="Pelajar" <?= $golongan == 'Pelajar' ? 'selected' : null ?>>Pelajar</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col 6">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="contoh : Sopir" autocomplete="off" required value="<?= $data['pekerjaan']; ?>">
            </div>
            <div class="mb-3 col 6">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Pilih Foto...">
                <p>
                    <small>Gambar Sebelumnya</small>
                </p>
                <img src="assets/img/<?= $data['gambar'] ?>" width="100px">
            </div>
        </div>

        <button type="submit" name="edit" class="btn btn-primary" style="float:right;">Edit</button>
    </form>
</div>
<?php
include 'layout/footer.php';
?>