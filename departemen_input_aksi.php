<?php 

include "config/koneksi.php";

$nama_departemen = $_POST['nama_departemen'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT INTO tb_departemen VALUES('','$nama_departemen','$status')");
 
header("location:departemen.php?pesan=input");

?>