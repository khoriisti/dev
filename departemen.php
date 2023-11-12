<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Departemen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h2>Data Departemen</h2>
	<hr>
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="departemen_input.php">+ Tambah Data Baru</a>
	<br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th colspan=2>Aksi</th>	
		</tr>
		<?php 
		include "config/koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM tb_departemen");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_departemen']; ?></td>
			<td>
				<a class="edit" href="departemen_edit.php?id=<?php echo $data['kd_departemen']; ?>">Edit</a> |
				<a class="hapus" href="departemen_hapus.php?id=<?php echo $data['kd_departemen']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>