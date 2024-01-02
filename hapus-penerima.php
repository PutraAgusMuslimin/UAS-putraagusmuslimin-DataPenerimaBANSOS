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
$id_bansos = (int)$_GET['id_bansos'];

if (delete_bansos($id_bansos) > 0) {
    echo "<script>
                alert('Data penerima Berhasil Dihapus');
                document.location.href = 'bansos.php';
            </script>";
} else {
    echo "<script>
                alert('Data penerima Gagal Digagal');
                document.location.href = 'bansos.php';
            </script>";
}
