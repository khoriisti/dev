<!DOCTYPE html>
<html>
<head>
	<title>IT Project DB</title>
</head>
<body>
 
	<h2>Kategori</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH KATEGORI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Kategori</th>
			<th>Nama Kategori</th>
			<th>Status</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_kategori");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kd_kategori']; ?></td>
				<td><?php echo $d['nama_kategori']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['kd_kategori']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['kd_kategori']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>