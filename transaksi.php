
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0b218f;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #f2f2f2;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #214d63;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #96b0b5;
        }


.btn {
  background-color: #036ffc; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:7px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

 td {
  padding: 8px;
  text-align: left;
  border-bottom: 3px solid #ddd;
}

tr:hover {background-color: #07a394;}
.buton2 {
            padding: 10px 15px;
            background-color: #f70505;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            }

</style>
<div class="sidebar">
        <a href="admin.php">Dashboard</a>
        <a href="data_mobil.php">Data Mobil</a>
        <a href="#customer">Data Customer</a>
        <a href="transaksi.php">Data Transaksi</a>
        <a href="logout.php" onclick="confirmLogout(event)">Logout</a>
    </div>

    <div class="content">
        <div class="navbar">
            <div class="menu">
                <a href="#">Home</a>
                <a href="index.php">Mobil</a>
                <a href="about.php">About</a>
            </div>
            <div class="user-actions">
                <div class="username">
                    <?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo 'Hai, ' . $_SESSION['username'];
                    }
                    ?>
                </div>
            </div>
        </div>
        <h1>Data Transaksi</h1>
        <a class="btn" href="tambahtransaksi.php">+ Tambah Data Mobil</a>

<?php
include 'koneksi.php';

$sql = "SELECT transaksi.id_transaksi, mobil.nama_mobil, customer.nama_customer, transaksi.tgl_sewa, transaksi.tgl_kembali
        FROM transaksi
        JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
        JOIN customer ON transaksi.id_customer = customer.id_customer ORDER BY id_transaksi";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Transaksi</th><th>Merk Mobil</th><th>Nama Customer</th><th>Tanggal Sewa</th><th>Tanggal Kembali</th><th>aksi</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["id_transaksi"]."</td>
            <td>".$row["nama_mobil"]."</td>
            <td>".$row["nama_customer"]."</td>
            <td>".$row["tgl_sewa"]."</td>
            <td>".$row["tgl_kembali"]."</td>
            <td><a class='buton2' href='hapus.php?id=".$row["id_transaksi"]."'>Hapus</a></td>
         
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

