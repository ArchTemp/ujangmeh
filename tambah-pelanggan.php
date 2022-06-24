<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tambah-pelanggan.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $query = mysqli_query($db, "SELECT MAX(id_pelanggan) as idTerbesar FROM pelanggan");
    $d = mysqli_fetch_array($query);
    $idPelanggan = $d['idTerbesar'];

    $urutan = (int) substr($idPelanggan,3,3);

    $urutan++;

    $huruf = "P";
    $idPelanggan = $huruf . sprintf("%03s", $urutan);
    ?>
    <div class="container">
        <div class="wrapper">
            <div class="back">
                <a href="home.php"><img src="./images/back.png" style="width:52px;height:52px;"></a>
            </div>
            <div class="header">
                    <p>Tambah Pelanggan</p>
            </div>
            <form action="action-pelanggan.php" method="post">
                <div class="form" align="center">
                    <div class="id-laundry">
                        <select name="idLaundry">
                            <option value="Pilih">--Pilih ID Laundry--</option>
                            <?php $k = mysqli_query($db, "SELECT * FROM laundry");
                                
                                foreach ($k as $row) : 
                            ?>
                            
                                <option value="<?php echo $row['id_laundry']?>"><?php echo $row['id_laundry']. " - " .$row['jenis_laundry']?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="id-Pelanggan">
                        <input type="text" name="idPel" required="required" value="<?php echo $idPelanggan?>" readonly>
                    </div>
                    <div class="nama-pelanggan">
                        <input type="text" name="namaPel" placeholder="Nama Pelanggan">
                    </div>
                    <div class="nomor-telepon">
                        <input type="text" name="noTelp" placeholder="Nomor Telepon">
                    </div>
                    <div class="alamat">
                        <input type="text" name="Alamat" placeholder="Alamat">
                    </div>
                    <div class="submit">
                        <button>Simpan</button>
                    </div>
                    <div class="reset">
                        <button type="reset" name="simpan"> Reset</button>
                    </div>
                </div>
            </form>
            <div class="foot">
                <p>UjangLaundry</p>
            </div>
        </div>
    </div>
</body>
</html>