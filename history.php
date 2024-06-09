<?php
$koneksi = require('koneksi.php');
$sql = "SELECT * FROM tabel_pembelian";
$data = $koneksi->query($sql);
$tiket = $data->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include('./navbar.php') ?>

    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Jumlah Tiket</th>
                    <th scope="col">Harga Pembelian</th>
                    <th scope="col">Tanggal Pembelian</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                foreach ($tiket as $b) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $b['nama_pembeli'] ?></td>
                        <td><?= $b['email'] ?></td>
                        <td><?= $b['no_telp'] ?></td>
                        <td><?= $b['jumlah_tiket'] ?></td>
                        <td><?= $b['total_harga'] ?></td>
                        <td><?= $b['tanggal_pembelian'] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>