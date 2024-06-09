<?php 
$koneksi = require('koneksi.php');

$id = $_GET['ids'];
$sql = "SELECT * FROM table_tiket WHERE id_tiket = $id";
$data = $koneksi->query($sql);
$tiket = $data->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tiket</title>
</head>
<body>
    <?php 
    $i = 1;
    foreach($tiket as $b) :
    ?>

    <h1 align="center">Detail Tiket <?= $b['nama_acara'] ?></h1>
    <h3 align="center"><a href="data_tiket.php">Kembali</a></h3>
    <table border cellpadiing="10" align="center">
        <tr>
            <td width="200">ID Tiket</td>
            <td>:</td>
            <td witdh="500"><?= $b['id_tiket'] ?></td>
        </tr>
        <tr>
            <td>Nama Acara</td>
            <td>:</td>
            <td><?= $b['nama_acara'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Acara</td>
            <td>:</td>
            <td><?= $b['tanggal_acara'] ?></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td><?= $b['lokasi'] ?></td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td>:</td>
            <td><?= $b['harga_tiket'] ?></td>
        </tr>

    </table>
    <?php endforeach; ?>
</body>
</html>