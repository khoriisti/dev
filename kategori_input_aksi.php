<?php 

include "config/koneksi.php";

$kode_kategori = $_POST['kd_kategori'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($koneksi,"INSERT INTO tb_kategori VALUES('$kode_kategori','$nama_kategori')");
 
header("location:kategori.php?pesan=input");

?>