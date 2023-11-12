<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Edit Kategori</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Kategori - Edit</h2>
	<hr><br/>
	<a class="tombol" href="kategori.php">Kembali</a>
	<br/><br/>

	<?php
	include 'config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_kategori where kd_kategori='$id'");
	while($d = mysqli_fetch_array($data)){
	?>

	<form action="kategori_edit_aksi.php" method="post">		
		<table>	

			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="nama_kategori" value="<?php echo $d['nama_kategori']; ?>"><input type="hidden" name="kd_kategori" value="<?php echo $d['kd_kategori']; ?>"></td>					
			</tr>
			<!--
			<tr>
				<td>Status</td>
				<td>
					<select name="status" id="status">
						<option selected value="<?php echo $d['status']; ?>"><?php echo $d['status']; ?></option>
						<option disabled> Pilih </option>
						<option value="Aktif">Aktif</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</td>
			</tr>
			-->
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
		<?php 
	}
	?>

</body>
</html>