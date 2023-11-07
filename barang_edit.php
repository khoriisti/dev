<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Edit Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Barang - Edit</h2>
	<hr><br/>
	<a class="tombol" href="barang.php">Kembali</a>
	<br/><br/>

	<?php
	include 'config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT tb_jenis.kd_jenis, tb_jenis.kd_barang, tb_jenis.kd_kategori, tb_kategori.nama_kategori, tb_barang.nama_barang, tb_barang.deskripsi FROM tb_jenis INNER JOIN tb_kategori ON tb_jenis.kd_kategori = tb_kategori.kd_kategori INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang where kd_jenis='$id'");
	while($d = mysqli_fetch_array($data)){
	?>

	<form action="barang_edit_aksi.php" method="post">		
		<table>	

			<tr>
				<td>Kategori</td>
				<td>
					<input type="hidden" name="kd_jenis" value="<?php echo $d['kd_jenis']; ?>">
					<select name="kd_kategori" id="kd_kategori">
						<option selected value="<?php echo $d['kd_kategori']; ?>"><?php echo $d['nama_kategori']; ?></option>
						<option disabled> Pilih </option>
						<?php
						include 'config/koneksi.php';
						$data1 = mysqli_query($koneksi,"select * from tb_kategori");
						while($d1 = mysqli_fetch_array($data1)){
						?>
						<option value="<?php echo $d1['kd_kategori']; ?>"><?php echo $d1['nama_kategori']; ?></option>
						<?php 
							}
						?>
					</select>
				</td>
			</tr>

			<tr>
				<td>Nama Barang</td>
				<td><input type="hidden" name="kd_barang" value="<?php echo $d['kd_barang']; ?>"><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"></td>		
			</tr>

			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></td>	
			</tr>

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