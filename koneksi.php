<?php 
$host ='localhost';
$db ='tiket_app';

$conn = new PDO("mysql::host=$host;dbname=$db;", 'root', 'password123');

if($conn){
    return $conn;
}else{
    echo "Gagal koneksi ke database";
}
?>