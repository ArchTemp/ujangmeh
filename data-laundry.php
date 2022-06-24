<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data-pelanggan.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Data Laundry</h1>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>ID Laundry</th>
                    <th>Harga</th>
                    <th>Jenis Laundry</th>
                </tr>
                    <?php
                    $no=1;
                    $query=mysqli_query($db, 'SELECT * FROM laundry');
                    while($data = mysqli_fetch_array($query)):
                        ?>
                        <tr>
                            <td><?= $data['id_laundry'] ?></td>
                            <td><?= $data['harga']?></td>
                            <td><?= $data['jenis_laundry'] ?></td>
                            <td class="action">
                                <a href="">
                                    <div class="edit"></div>
                                </a>
                                <a href="">
                                    <div class="hapus"></div>
                                </a>
                            </td>
                        </tr>
                    <?php
                        endwhile;
                    ?>
            </table>
        </div>
        <div class="col">

        </div>
    </div>
</body>
</html>