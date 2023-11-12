<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Input Departemen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Data Departemen - Input</h2>
	<hr><br/>
	<a class="tombol" href="departemen.php">Lihat Semua Data</a>
	<br/><br/>

	<?php
	include 'config/koneksi.php';
	
	// mengambil data departemen dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_departemen) as kodeTerbesar FROM tb_departemen");
	$data = mysqli_fetch_array($query);
	$kodeDepartemen = $data['kodeTerbesar'];
	 
	// mengambil angka dari kode departemen terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeDepartemen, 1, 2);
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
	 
	// membentuk kode departemen baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya D 
	$huruf = "D";
	$kodeDepartemen = $huruf . sprintf("%02s", $urutan);

	?>

	<form action="departemen_input_aksi.php" method="post">		
		<table>	
			<tr>
				<td>Nama Departemen</td>
				<td><input type="text" name="nama_departemen"><input type="hidden" name="kd_departemen" value="<?php echo $kodeDepartemen; ?>"></td>					
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