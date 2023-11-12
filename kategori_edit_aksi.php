<?php 

include "config/koneksi.php";

$kode_kategori = $_POST['kd_kategori'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($koneksi,"update tb_kategori set nama_kategori='$nama_kategori' where kd_kategori='$kode_kategori'");

header("location:kategori.php?pesan=update");

?>