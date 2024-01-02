<?php
session_start();
$title = 'Daftar Penerima Bantuan Sosial';
include 'layout/header.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

//data bansos
$bansos = select("SELECT * FROM data_bansos ORDER BY id_bansos DESC");

?>
<div class="container mt-3">
    <h3><i class="fas fa-users"></i> Data Penerima Bantuan Sosial</h3>
    <hr>
    <?php if ($_SESSION['level'] == 1) : ?>
        <a href="tambah-penerima.php" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i> Tambah</a>
    <?php endif; ?>

    <a href="download-pdf.php" class="btn btn-danger mb-2" target="_blank"><i class="fas fa-file-pdf"></i> download PDF</a>

    <table class="table table-hover table-bordered align-middle border border-black" id="table">
        <thead>
            <tr class="table-success table-bordered  text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>No telepon</th>
                <th>Alamat</th>
                <th>Golongan</th>
                <th>Pekerjaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($bansos as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jk']; ?></td>
                    <td><?= $data['telepon']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td><?= $data['golongan']; ?></td>
                    <td><?= $data['pekerjaan']; ?></td>
                    <td width="25%" class="text-center">
                        <a href="detail-penerima.php?id_bansos=<?= $data['id_bansos']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <?php if ($_SESSION['level'] == 1) : ?>
                            <a href="edit-penerima.php?id_bansos=<?= $data['id_bansos']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <?php endif; ?>
                        <a href=" hapus-penerima.php?id_bansos=<?= $data['id_bansos']; ?>" class="btn btn-danger btn-sm" onclick=" return confirm('Yakin mau menghapus data?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php

include 'layout/footer.php';

?>