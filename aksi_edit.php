<?php

include 'koneksi.php';
if(isset($_GET[id]))

$id_transaksi = $_POST['id_transaksi'];
$id_mobil = $_POST['id_mobil'];
$id_customer = $_POST['id_customer'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];

$sql_update=("UPDATE transaksi SET id_transaksi='$id_transaksi', id_mobil='$id_mobil', id_customer='$id_customer', tgl_sewa='$tgl_sewa', tgl_kembali='$tgl_kembali' WHERE id_transaksi='$id_transaksi'");

mysqli_query($conn,$sql_update)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="index.php?"
</script>';

?>