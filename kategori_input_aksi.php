<?php 

include "config/koneksi.php";

$nama_kategori = $_POST['nama_kategori'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT INTO tb_kategori VALUES('','$nama_kategori','$status')");
 
header("location:kategori.php?pesan=input");

?>