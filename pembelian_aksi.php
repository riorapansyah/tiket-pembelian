<?php
$koneksi = require('koneksi.php');

$sql = "INSERT INTO tabel_pembelian (nama_pembeli, email, no_telp, id_tiket, jumlah_tiket, total_harga, tanggal_pembelian) 
        VALUES (:nama_pembeli, :email, :no_telp, :id_tiket, :jumlah_tiket, :total_harga, :tanggal_pembelian)";
$tambah = $koneksi->prepare($sql);
$tambah->execute([
    ':nama_pembeli'            => $_POST['nama_pembeli'],
    ':email'                   => $_POST['email'],
    ':no_telp'                 => $_POST['no_telp'],
    ':id_tiket'                 => $_POST['id_tiket'],
    ':jumlah_tiket'            => $_POST['jumlah_tiket'],
    ':total_harga'             => $_POST['total_harga'],
    ':tanggal_pembelian'       => $_POST['tanggal_pembelian'],
]);

if ($tambah->rowCount() > 0) {
    header('Location: index.php');
    exit();
} else {
    echo "Error: tidak Berhasil Pembelian Tiket.";
}
?>