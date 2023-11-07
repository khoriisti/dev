<!DOCTYPE html>
<html>
<head>
	<title>IT Project DB</title>
</head>
<body>
 
	<h2>Barang</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Deskripsi</th>
			<th>QTY</th>
			<th>Kode Kategori</th>
		</tr>
		<?php 
		include "config/koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kd_barang']; ?></td>
				<td><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['deskripsi']; ?></td>
				<td><?php echo $d['qty']; ?></td>
				<td><?php echo $d['kode_kategori']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['kd_barang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['kd_barang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>