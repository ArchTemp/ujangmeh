<?php
include 'koneksi.php';

$id_laundry=$_POST['idLaundry'];
$id_pelanggan=$_POST['idPel'];
$nama_pelanggan=$_POST['namaPel'];
$no_telp=$_POST['noTelp'];
$alamat=$_POST['Alamat'];

$set = mysqli_query($db, "INSERT INTO pelanggan VALUES('$id_laundry','$id_pelanggan', '$nama_pelanggan', '$no_telp', '$alamat')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='home.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='tambah-pelanggan.php'>";
}

?>