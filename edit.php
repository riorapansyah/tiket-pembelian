<?php
$koneksi = require('koneksi.php');

$id = $_GET['id'];
$sql = "SELECT * FROM table_tiket WHERE id_tiket = $id";
$data = $koneksi->query($sql);
$tiket = $data->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tiket</title>
</head>

<body>
    <h1>Edit Data Barang</h1>
    <h3><a href="index.php">Kembali</a></h3>
    <form action="edit_aksi.php" method="POST">
        <?php foreach ($tiket as $b) : ?>
            <table cellpadding="10">
                <tr>
                    <td><label for="id">ID Tiket</label></td>
                    <td>:</td>
                    <td><input type="hidden" name="id_tiket" id="id" value="<?php echo $b['id_tiket'] ?>">ID Tiket Tidak Bisa DI Ganti</td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Acara</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama_acara" id="nama" value="<?php echo $b['nama_acara'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="tggl">Tanggal Acara</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_acara" id="tggl" value="<?php echo $b['tanggal_acara'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="lok">Lokasi</label></td>
                    <td>:</td>
                    <td><input type="text" name="lokasi" id="lok" value="<?php echo $b['lokasi'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="harga">Harga Tiket</label></td>
                    <td>:</td>
                    <td><input type="number" name="harga_tiket" id="harga" value="<?php echo $b['harga_tiket'] ?>"></td>
                </tr>
                <tr>
                    <td>
                        <button>Edit</button>
                    </td>
                </tr>

            </table>
        <?php endforeach; ?>

    </form>
</body>

</html>