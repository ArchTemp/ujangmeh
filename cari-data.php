<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
        <th>Nama Pelanggan</th>
	</tr>
	<?php 
	// if(isset($_GET['cari'])){
	// 	$cari = $_GET['cari'];
	// 	$data = mysqli_query("select * from pelanggan where nama_pelanggan like '%".$cari."%'");				
	// }else{
	// 	$data = mysqli_query("select * from pelanggan");		
	// }
	// $no = 1;
	// while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		
		<td><?php echo $d['nama_pelanggan']; ?></td>
	</tr>
	<?php  ?>
</table>