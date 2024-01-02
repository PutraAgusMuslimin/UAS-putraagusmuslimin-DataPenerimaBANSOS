<?php

//fungsi menampilkan 
function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows   = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]  = $row;
    }
    return $rows;
}

//fungsi tambah barang
function create_barang($post)
{
    global $db;

    $nama = $post['nama'];
    $stok = $post['stok'];

    $query = "INSERT INTO barang VALUES(null, '$nama', '$stok', CURRENT_TIMESTAMP())";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi edit barang
function update_barang($post)
{
    global $db;

    $id_barang  = $post['id_barang'];
    $nama       = strip_tags($post['nama']);
    $stok       = strip_tags($post['stok']);

    $query = "UPDATE barang SET nama = '$nama', stok = '$stok' WHERE id_barang = $id_barang";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi hapus barang
function delete_barang($id_barang)
{
    global $db;
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//tambah penerima
function create_penerima($post)
{
    global $db;

    $nama           = strip_tags($post['nama']);
    $jk             = strip_tags($post['jk']);
    $telepon        = strip_tags($post['telepon']);
    $email          = strip_tags($post['email']);
    $tanggal_lahir  = strip_tags($post['tanggal_lahir']);
    $alamat         = strip_tags($post['alamat']);
    $golongan       = strip_tags($post['golongan']);
    $pekerjaan      = strip_tags($post['pekerjaan']);
    $gambar         = upload_file();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO data_bansos VALUES(null, '$nama', '$jk', '$telepon', '$email', '$tanggal_lahir', '$alamat', '$golongan', '$pekerjaan', '$gambar')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi edit penerima
function update_penerima($post)
{
    global $db;

    $id_bansos      = strip_tags($post['id_bansos']);
    $nama           = strip_tags($post['nama']);
    $jk             = strip_tags($post['jk']);
    $telepon        = strip_tags($post['telepon']);
    $email          = strip_tags($post['email']);
    $tanggal_lahir  = strip_tags($post['tanggal_lahir']);
    $alamat         = strip_tags($post['alamat']);
    $golongan       = strip_tags($post['golongan']);
    $pekerjaan      = strip_tags($post['pekerjaan']);
    $gambarlama     = strip_tags($post['gambarlama']);

    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload_file();
    }

    $query = "UPDATE data_bansos SET nama = '$nama', jk   = '$jk', telepon = '$telepon', email = '$email', tanggal_lahir = '$tanggal_lahir',
    alamat = '$alamat', golongan = '$golongan', pekerjaan = '$pekerjaan', gambar = '$gambar'  WHERE id_bansos = $id_bansos";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi upload gambar
function upload_file()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $gambarvalid = ['jpg', 'jpeg', 'png'];
    $eksengambar = explode('.', $namaFile);
    $eksengambar = strtolower(end($eksengambar));
    if (!in_array($eksengambar, $gambarvalid)) {
        echo "<script>
            alert('silakan pilih gambar kembali');
            document.location.href = 'tambah-penerima.php';
        </script>";
        return false;
    }

    if ($ukuranFile > 2048000) {
        echo "<script>
        alert('Ukuran foto maksimal 2 MB');
        document.location.href = 'tambah-penerima.php';
    </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $eksengambar;
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}

//fungsi hapus penerima
function delete_bansos($id_bansos)
{
    global $db;

    $gambar = select("SELECT * FROM data_bansos WHERE id_bansos = $id_bansos ")[0];
    unlink("assets/img/" . $gambar['gambar']);

    $query = "DELETE FROM data_bansos WHERE id_bansos = $id_bansos";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi tambah akun
function create_akun($post)
{
    global $db;

    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);

    $password = password_hash($password, PASSWORD_DEFAULT);


    $query = "INSERT INTO akun VALUES(null, '$nama', '$username', '$email', '$password', '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi edit akun
function update_akun($post)
{
    global $db;

    $id_akun    = strip_tags($post['id_akun']);
    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);

    $password = password_hash($password, PASSWORD_DEFAULT);


    $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level= '$level' WHERE id_akun = $id_akun";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi hapus akun
function delete_akun($id_akun)
{
    global $db;

    $query = "DELETE FROM akun WHERE id_akun = $id_akun";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
