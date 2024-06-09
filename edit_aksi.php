<?php
$koneksi = require('koneksi.php');

$sql = "UPDATE table_tiket SET nama_acara = :nama_acara, tanggal_acara = :tanggal_acara, lokasi = :lokasi, harga_tiket = :harga_tiket WHERE id_tiket = :id_tiket";
$edit = $koneksi->prepare($sql);
$edit->bindparam(':nama_acara', $_POST['nama_acara']);
$edit->bindparam(':tanggal_acara', $_POST['tanggal_acara']);
$edit->bindparam(':lokasi', $_POST['lokasi']);
$edit->bindparam(':harga_tiket', $_POST['harga_tiket']);
$edit->bindparam(':id_tiket', $_POST['id_tiket'], PDO::PARAM_INT);

if ($edit->execute()) {
    header('location:data_tiket.php');
}
