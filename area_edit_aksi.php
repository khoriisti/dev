<?php 

include "config/koneksi.php";

$kode_departemen = $_POST['kd_departemen'];
$nama_departemen = $_POST['nama_departemen'];

if (isset($kode_departemen) and isset($nama_departemen))
{
	if(empty($kode_departemen) or empty($nama_departemen))
	{
	   echo "<script type='text/javascript'>alert('Maaf, anda harus mengisi nama area terlebih dahulu');document.location.href = 'area_input.php';</script>";
	}
	else
	{
		$query = mysqli_query($koneksi, "SELECT nama_departemen FROM tb_departemen WHERE nama_departemen = '$nama_departemen'"); 

		if($query->num_rows > 0) {
			echo "<script type='text/javascript'>alert('Nama Departemen sudah terdaftar');document.location.href = 'area_input.php';</script>";
		    //echo 'window.location.href = "area.php";';
		    //echo '<script type="text/javascript">\n'; 
			//echo 'alert("Nama Departemen sudah terdaftar");\n'; 
			//echo 'document.location.href = "area.php";\n';
			//echo '</script>\n';
		} else {
		    //mysqli_query($conn, "INSERT INTO tb_departemen (kd_departemen, nama_departemen) VALUES ('$kd_departemen','$nama_departemen')");
		    echo "$kode_departemen, $nama_departemen";
		    echo "<script type='text/javascript'>alert('Data berhasil disimpan');document.location.href = 'area.php?p=1';</script>";
		}
	}
}
else
{
   echo "<script type='text/javascript'>alert('Maaf, anda tidak diizinkan untuk ke halaman ini, silahkan input data terlebih dahulu');document.location.href = 'area_input.php';</script>";
}

?>