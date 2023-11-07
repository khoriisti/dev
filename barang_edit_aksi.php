<?php 

include "config/koneksi.php";

$kd_jenis = $_POST['kd_jenis'];
$kd_kategori = $_POST['kd_kategori'];
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];

//echo "$kd_jenis; $kd_kategori; $kd_barang; $nama_barang; $deskripsi";

mysqli_query($koneksi,"update tb_jenis, tb_barang set tb_jenis.kd_kategori='$kd_kategori', tb_barang.nama_barang='$nama_barang', tb_barang.deskripsi='$deskripsi' WHERE tb_jenis.kd_barang=tb_barang.kd_barang AND tb_barang.kd_barang = '$kd_barang'");

header("location:barang.php?pesan=update");

?>