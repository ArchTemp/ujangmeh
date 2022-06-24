<?php

include "session.php";
include "koneksi.php";

?>

<!-- Halo <?php echo $_SESSION['username'];?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>UjangLaundry</h1>
            </div>
            <div class="menu">
                <h2>Menu</h2>
            </div>
            <a href="data-pelanggan.php" class="wrapper">Data Pelanggan</a>
            <a href="data-laundry.php" class="wrapper">Data Laundry</a>
            <a href="" class="wrapper">Data Petugas</a>
        </div>
        <div class="dashboard">
            <div class="title">
                <h1>Hi, <?php echo $_SESSION['nama'];?></h1>
            </div>
            <div class="list">
                <a href="tambah-pelanggan.php" class="tambah-pelanggan">
                    <div class="image-pelanggan"></div>
                    <div class="text-pelanggan"><p>Tambah Pelanggan</p></div>
                </a>
                <a href="" class="tambah-laundry">
                    <div class="image-laundry"></div>
                    <div class="text-laundry"><p>Tambah Laundry</p></div>
                </a>
            </div>
            <div class="foot"><p>Copyright © 2022 | UjangLaundry</p></div>
        </div>
    </div>
</body>
</html>