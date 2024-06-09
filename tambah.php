<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<title>Tambah Data</title>

<body>

    <h1>Tambah Data</h1>

    <h3><a href="data_tiket.php">Kembali</a></h3>
    <table cellspacing="10">
        <form action="tambah_aksi.php" method="post">



            <tr>
                <td><label for="nama">Nama Acara</label></td>

                <td>:</td>

                <td><input type="text" name="nama_acara" id="nama"></td>

            </tr>

            <tr>
                <td><label for="tggl">Tanggal Acara</label></td>

                <td>:</td>

                <td><input type="date" name="tanggal_acara" id="tggl"></td>

            </tr>

            <tr>
                <td><label for="lok">Lokasi</label></td>

                <td>:</td>

                <td><input type="text" name="lokasi" id="lok"></td>

            </tr>

            <tr>
                <td><label for="harga">Harga Tiket</label></td>

                <td>:</td>

                <td><input type="number" name="harga_tiket" id="harga"></td>

            </tr>

            <tr>
                <td>
                    <button>Tambah</button>
                </td>
            </tr>

        </form>

    </table>

</body>

</html>