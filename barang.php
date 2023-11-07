<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h2>Data Barang</h2>
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
	<a class="tombol" href="barang_input.php">+ Tambah Data Baru</a>
	<br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Nama Barang</th>
			<th>Deskripsi</th>
			<th colspan=2>Aksi</th>	
		</tr>
		<?php 
		include "config/koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT tb_jenis.kd_jenis, tb_kategori.nama_kategori, tb_barang.nama_barang, tb_barang.deskripsi FROM tb_jenis INNER JOIN tb_kategori ON tb_jenis.kd_kategori = tb_kategori.kd_kategori INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_kategori'];; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['deskripsi']; ?></td>
			<td>
				<a class="edit" href="barang_edit.php?id=<?php echo $data['kd_jenis']; ?>">Edit</a> |
				<a class="hapus" href="barang_hapus.php?id=<?php echo $data['kd_jenis']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>