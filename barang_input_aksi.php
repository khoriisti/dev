<?php 

include "config/koneksi.php";

$kode_jenis = $_POST['kd_jenis'];
$kode_kategori = $_POST['kd_kategori'];
$kode_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];

/*
$query = mysqli_query($koneksi, "SELECT max(kd_barang) AS kode FROM tb_barang"); 
if ($query->num_rows > 0) { 
  foreach ($query as $q) { 
    $no = ((int)$q['kode'])+1; 
    $kd = sprintf("%01s", $no); 
  } 
} else { 
  $kd = "1"; 
}

//echo "$kd; $kode_kategori; $nama_barang; $deskripsi";

*/

mysqli_query($koneksi,"INSERT INTO tb_barang VALUES('$kode_barang','$nama_barang','$deskripsi')");
mysqli_query($koneksi,"INSERT INTO tb_jenis VALUES('$kode_jenis','$kode_kategori','$kode_barang')");

header("location:barang.php?pesan=input");

?>