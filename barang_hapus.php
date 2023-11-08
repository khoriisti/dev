<?php 
// koneksi database
include 'config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$data = mysqli_query($koneksi,"SELECT tb_jenis.kd_jenis, tb_jenis.kd_barang, tb_barang.kd_barang FROM tb_jenis INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang where kd_jenis='$id'");
while($d = mysqli_fetch_array($data)){

$kd_jenis = $d['kd_jenis'];
$kd_barang = $d['kd_barang'];

mysqli_query($koneksi,"delete from tb_barang where kd_barang='$kd_barang'");
mysqli_query($koneksi,"delete from tb_jenis where kd_jenis='$kd_jenis'");

}

// menghapus data dari database
//mysqli_query($koneksi,"delete from tb_jenis where kd_jenis='$id'");

//echo '<script language="javascript" type="text/javascript">
//alert("Data berhasil di hapus.");</script>';
//echo "<meta http-equiv='refresh' content='2; url=kategori.php'>";
//echo "header("location:kategori.php?pesan=hapus")";

//mengalihkan halaman kembali ke index.php
header("location:barang.php?pesan=hapus");
 
?>