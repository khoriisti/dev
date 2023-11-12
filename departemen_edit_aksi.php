<?php 

include "config/koneksi.php";

$kode_departemen = $_POST['kd_departemen'];
$nama_departemen = $_POST['nama_departemen'];

echo "$kode_departemen,$nama_departemen,$status";

mysqli_query($koneksi,"update tb_departemen set nama_departemen='$nama_departemen' where kd_departemen='$kode_departemen'");

header("location:departemen.php?pesan=update");

?>