<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<title>Pembelian Tiket</title>

<body>

    <h1>Pembelian Tiket</h1>

    <table cellspacing="10">
        <form action="pembelian_aksi.php" method="post">



            <tr>
                <td><label for="nama">Nama pembeli</label></td>

                <td>:</td>

                <td><input type="text" name="nama_pembeli" id="nama"></td>

            </tr>

            <tr>
                <td><label for="email">Email</label></td>

                <td>:</td>

                <td><input type="text" name="email" id="email"></td>

            </tr>

            <tr>
                <td><label for="telp">Nomor Telepon</label></td>

                <td>:</td>

                <td><input type="number" name="no_telp" id="telp"></td>

            </tr>
            <tr>
                <td><label for="id_t">ID Tiket</label></td>

                <td>:</td>

                <td><input type="number" name="id_tiket" id="id_t"></td>

            </tr>

            <tr>
                <td><label for="total">Total Harga</label></td>

                <td>:</td>

                <td><input type="number" name="total_harga" id="total"></td>

            </tr>
            <tr>
                <td><label for="jumlah">jumlah Tiket</label></td>

                <td>:</td>

                <td><input type="number" name="jumlah_tiket" id="jumlah"></td>

            </tr>

            <tr>
                <td><label for="tggl">Tanggal Pembelian</label></td>

                <td>:</td>

                <td><input type="date" name="tanggal_pembelian" id="tggl"></td>

            </tr>

            <tr>
                <td>
                    <button>Beli Tiket</button>
                </td>
            </tr>

        </form>

    </table>

</body>

</html>