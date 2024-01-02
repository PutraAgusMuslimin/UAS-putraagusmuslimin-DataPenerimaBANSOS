<?php
session_start();
$title = 'Detail Penerima Bantuan Sosial';
include 'layout/header.php';
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu');
            document.location.href = 'login.php';
          </script>";
    exit;
}

//detail

$id_bansos = (int)$_GET['id_bansos'];

//data bansos
$data = select("SELECT * FROM data_bansos WHERE  id_bansos = $id_bansos")[0];

?>
<div class="container mt-3 mb-3">
    <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill m-2" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
        </svg>Detail Data <?= $data['nama']; ?></h6>
    <hr>
    <table class="table table-hover table-bordered align-middle border border-black">
        <tr>
            <td>Nama</td>
            <td><?= $data['nama'] ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td><?= $data['jk'] ?></td>
        </tr>
        <tr>
            <td>No telepon</td>
            <td><?= $data['telepon'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $data['email'] ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td><?= $data['tanggal_lahir'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $data['alamat'] ?></td>
        </tr>
        <tr>
            <td>Golongan</td>
            <td><?= $data['golongan'] ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><?= $data['pekerjaan'] ?></td>
        </tr>
        <tr>
            <td width="50%">Foto</td>
            <td>
                <a href="assets/img/<?= $data['gambar'] ?>">
                    <img src="assets/img/<?= $data['gambar'] ?>" width="50%">
                </a>
            </td>
        </tr>
    </table>
    <a href="bansos.php" class="btn btn-secondary btn-sm " style="float: right;">Kembali</a>
</div>
<?php

include 'layout/footer.php';

?>