<?php
$koneksi = require('koneksi.php');

$sql = "INSERT INTO table_tiket (nama_acara, tanggal_acara, lokasi, harga_tiket) 
        VALUES (:nama_acara, :tanggal_acara, :lokasi, :harga_tiket)";
$tambah = $koneksi->prepare($sql);
$tambah->execute([
    ':nama_acara'        => $_POST['nama_acara'],
    ':tanggal_acara'     => $_POST['tanggal_acara'],
    ':lokasi'            => $_POST['lokasi'],
    ':harga_tiket'       => $_POST['harga_tiket'],
]);

if ($tambah->rowCount() > 0) {
    header('Location: data_tiket.php');
    exit();
} else {
    echo "Error: Data tidak berhasil ditambahkan.";
}
?>