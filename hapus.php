<?php 
$koneksi = require('koneksi.php');

$sql ="DELETE FROM table_tiket WHERE id_tiket = :id_tiket";
$hapus = $koneksi->prepare($sql);
$hapus->bindparam(':id_tiket', $_GET['ids']);

if($hapus->execute()){
    header('location:data_tiket.php');
}
?>