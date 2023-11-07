<!DOCTYPE html>
<html>
<head>
	<title>IT Project DB</title>
</head>
<body>
 
	<h2>User</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH USER</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>User ID</th>
			<th>Nama User</th>
			<th>Departemen</th>
			<th>Status</th>
		</tr>
		<?php 
		include "config/koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['userId']; ?></td>
				<td><?php echo $d['nama_user']; ?></td>
				<td><?php echo $d['kd_departemen']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['userId']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['userId']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>