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

	<?php

	include "config/koneksi.php";

	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(tb_barang.kd_barang) as kodeTerbesar, max(tb_jenis.kd_jenis) as kodeTerbesar1 FROM tb_barang, tb_jenis");
	$data = mysqli_fetch_array($query);
	$kodeBarang = $data['kodeTerbesar'];
	$kodeJenis = $data['kodeTerbesar1'];

	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeBarang, 1, 3);
	$urutan1 = (int) substr($kodeJenis, 1, 3);

	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
	$urutan1++;
	 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "B";
	$huruf1 = "J";
	$kodeBarang = $huruf . sprintf("%03s", $urutan);
	$kodeJenis = $huruf1 . sprintf("%03s", $urutan1);

	?>

	<form action="barang_input_aksi.php" method="post">		
		<table>	
			
			<tr>
				<td>Kategori</td>
				<td><input type="hidden" name="kd_barang" value="<?php echo $kodeBarang; ?>"><input type="hidden" name="kd_jenis" value="<?php echo $kodeJenis; ?>">
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