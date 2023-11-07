<!DOCTYPE html>
<html>
<head>
	<title>IT Project DB</title>
</head>
<body>
 
	<h2>Departemen</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH DEPARTEMEN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Departemen</th>
			<th>Nama Departemen</th>
			<th>Status</th>
		</tr>
		<?php 
		include "config/koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_departemen");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kd_departemen']; ?></td>
				<td><?php echo $d['nama_departemen']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['kd_departemen']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['kd_departemen']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>