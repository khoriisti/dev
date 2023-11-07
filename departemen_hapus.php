<?php 
// koneksi database
include 'config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_departemen where kd_departemen='$id'");

// mengalihkan halaman kembali ke index.php
header("location:departemen.php?pesan=hapus");
 
?>