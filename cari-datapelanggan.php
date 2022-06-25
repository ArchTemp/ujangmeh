<?php
include "koneksi.php";
$query = mysqli_query($db,"select * from pelanggan where id_pelanggan='P001'");
echo $query;
?>