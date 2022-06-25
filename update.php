<?php 
 
include 'koneksi.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
 
mysqli_query($db,"UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', alamat='$alamat' WHERE id_pelanggan='$id_pelanggan'");
 
header("location:data-pelanggan.php?pesan=update");
 
?>