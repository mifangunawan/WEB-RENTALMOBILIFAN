<?php
include 'koneksi.php';

$nama_mobil = $_POST['nama_mobil'];
$tahun = $_POST['tahun'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];

$sql = "INSERT INTO mobil (nama_mobil, tahun, warna, harga, id_kategori) VALUES ('$nama_mobil', '$tahun', '$warna', '$harga', '$id_kategori')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='dashboard.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>