<?php 
// koneksi database
include 'config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_kategori where kd_kategori='$id'");

//echo '<script language="javascript" type="text/javascript">
//alert("Data berhasil di hapus.");</script>';
//echo "<meta http-equiv='refresh' content='2; url=kategori.php'>";
//echo "header("location:kategori.php?pesan=hapus")";

// mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=hapus");
 
?>