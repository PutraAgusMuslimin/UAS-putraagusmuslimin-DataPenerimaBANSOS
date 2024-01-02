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
//sesuai user
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 2) {
    echo "<script>
            document.location.href = 'akun.php';
          </script>";
    exit;
}
$title = 'Data Barang Bantuan Sosial';

include 'layout/header.php';

$data_barang = select("SELECT * FROM barang ORDER BY id_barang DESC");

?>
<div class="container mt-3">
    <h3><i class="fas fa-list"></i> Data Barang Bantuan Sosial</h3>
    <hr>
    <?php if ($_SESSION['level'] == 1) : ?>
        <a href="tambah-barang.php" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i> Tambah</a>
    <?php endif; ?>
    <table class="table table-hover table-bordered align-middle border border-black" id="table">
        <thead>
            <tr class="table-success table-bordered  text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $barang) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $barang['nama']; ?></td>
                    <td><?= $barang['stok']; ?></td>
                    <td><?= date('d-m-Y | H:i:s', strtotime($barang['tanggal'])); ?></td>
                    <td width="20%" class="text-center">
                        <!-- <a href="detail.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye m-2" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
            </svg></a> -->
                        <a href="edit-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data?');">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php $no++; ?>
        </tbody>
        </thead>
    </table>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<?php
include 'layout/footer.php';
?>