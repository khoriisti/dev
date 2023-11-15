<!DOCTYPE html>
<html>
<head>
	<title>IT Stock - Ambil Detail</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h2>Data Ambil Detail Barang</h2>
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
	<a class="tombol" href="ambil.php">< Kembali</a>
	<br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nomor Transaksi</th>
			<th>Kode Jenis</th>
			<th>Kode Departemen</th>
			<th>Item diambil</th>
		</tr>
		<?php 
		include "config/koneksi.php";
		//$query_mysql = mysqli_query($koneksi,"SELECT tb_jenis.kd_jenis, tb_kategori.nama_kategori, tb_barang.nama_barang, tb_barang.deskripsi FROM tb_jenis INNER JOIN tb_kategori ON tb_jenis.kd_kategori = tb_kategori.kd_kategori INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang");
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM tb_ambil_detail");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['kd_ambil'];; ?></td>
			<td><?php echo $data['kd_jenis']; ?></td>
			<td><?php echo $data['kd_departemen']; ?></td>
			<td><?php echo $data['stok_ambil']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>