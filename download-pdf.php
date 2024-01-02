<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'config/app.php';
$bansos = select("SELECT * FROM data_bansos");


$content .= '
<page>
    <h3 align="center">Laporan Penerima Bantuan Sosial</h3>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>No telepon</th>
            <th>Email</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>Golongan</th>
            <th>Pekerjaan</th>
            <th>Gambar</th>
        </tr>
        ';

$no = 1;
foreach ($bansos as $data) {
    $content .= ' 
                <tr>
                    <td>' . $no++ . '</td>
                    <td>' . $data['nama'] . '</td>
                    <td>' . $data['jk'] . '</td>
                    <td>' . $data['telepon'] . '</td>
                    <td>' . $data['email'] . '</td>
                    <td>' . $data['tanggal_lahir'] . '</td>
                    <td>' . $data['alamat'] . '</td>
                    <td>' . $data['golongan'] . '</td>
                    <td>' . $data['pekerjaan'] . '</td>
                    <td><img src="assets/img/' . $data['gambar'] . '" width="50" height="50"></td>
                </tr>
                ';
}
$content .= '
            </table>
</page>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($content);
$mpdf->Output("Laporan Penerima BANSOS", "I");
exit;
