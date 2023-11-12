<?php 

include "config/koneksi.php";

$kode_departemen = $_POST['kd_departemen'];
$nama_departemen = $_POST['nama_departemen'];

mysqli_query($koneksi,"INSERT INTO tb_departemen VALUES('$kode_departemen','$nama_departemen')");
 
header("location:departemen.php?pesan=input");

?>