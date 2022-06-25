<!DOCTYPE html>
<html>
<head>
	<title>document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		

	</div>
	
	<br/>
	
	<a href="data-pelanggan.php">Lihat Semua Data Pelanggan</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id_pelanggan = $_GET['id_pelanggan'];
	$query_mysql = mysqli_query($db,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>">
					<input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nomor Telpon</td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>