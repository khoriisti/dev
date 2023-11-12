<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Input Kategori</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Kategori - Input</h2>
	<hr><br/>
	<a class="tombol" href="kategori.php">Lihat Semua Data</a>
	<br/><br/>

	<?php

	include "config/koneksi.php";

	// mengambil data departemen dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_kategori) as kodeTerbesar FROM tb_kategori");
	$data = mysqli_fetch_array($query);
	$kodeKategori = $data['kodeTerbesar'];
	 
	// mengambil angka dari kode departemen terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeKategori, 1, 2);
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
	 
	// membentuk kode departemen baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya D 
	$huruf = "K";
	$kodeKategori = $huruf . sprintf("%02s", $urutan);

	?>

	<form action="kategori_input_aksi.php" method="post">		
		<table>	
			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="nama_kategori"><input type="hidden" name="kd_kategori" value="<?php echo $kodeKategori; ?>"></td>					
			</tr>
			<!--
			<tr>
				<td>Status</td>
				<td>
					<select name="status" id="status">
						<option disabled selected> Pilih </option>
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
</body>
</html>