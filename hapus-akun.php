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
include 'config/app.php';
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
                alert('Data Akun Berhasil Dihapus');
                document.location.href = 'akun.php';
            </script>";
} else {
    echo "<script>
                alert('Data Akun Gagal Digagal');
                document.location.href = 'akun.php';
            </script>";
}
