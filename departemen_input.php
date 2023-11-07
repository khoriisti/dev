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

	<form action="departemen_input_aksi.php" method="post">		
		<table>	
			<tr>
				<td>Nama Departemen</td>
				<td><input type="text" name="nama_departemen"></td>					
			</tr>
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
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>