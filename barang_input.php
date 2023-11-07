<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Input Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Barang - Input</h2>
	<hr><br/>
	<a class="tombol" href="barang.php">Lihat Semua Data</a>
	<br/><br/>

	<form action="barang_input_aksi.php" method="post">		
		<table>	
			
			<tr>
				<td>Kategori</td>
				<td>
					<select name="kd_kategori" id="kd_kategori">
						<option disabled selected> Pilih </option>
						<?php
						include 'config/koneksi.php';
						$data = mysqli_query($koneksi,"select * from tb_kategori");
						while($d = mysqli_fetch_array($data)){
						?>
						<option value="<?php echo $d['kd_kategori']; ?>"><?php echo $d['nama_kategori']; ?></option>
						<?php 
							}
						?>
					</select>
				</td>
			</tr>

			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang"></td>					
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>