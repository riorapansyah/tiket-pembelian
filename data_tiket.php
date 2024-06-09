<?php
$koneksi = require('koneksi.php');
$sql = "SELECT * FROM table_tiket";
$data = $koneksi->query($sql);
$tiket = $data->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Tiket</title>
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
                    <th scope="col">Nama Acara</th>
                    <th scope="col">Tanggal Acara</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col col-3" rowspan="3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                foreach ($tiket as $b) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $b['nama_acara'] ?></td>
                        <td><?= $b['tanggal_acara'] ?></td>
                        <td><?= $b['lokasi'] ?></td>
                        <td><?= $b['harga_tiket'] ?></td>
                        <td><a href="detail.php?ids=<?= $b['id_tiket'] ?>">Detail</a></td>
                        <td><a href="edit.php?id=<?= $b['id_tiket'] ?>">Edit</a></td>
                        <td><a href="hapus.php?ids=<?= $b['id_tiket'] ?>" onclick="alert('Yakin Ingin Menghapus Ini??')">Hapus</a>

                    </tr>

                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>