<?php

include "config/koneksi.php";

// mengambil data departemen dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(kd_kategori) as kodeTerbesar FROM tb_kategori");
$data = mysqli_fetch_array($query);
$kodeKategori = $data['kodeTerbesar'];
 
// mengambil angka dari kode departemen terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeKategori, 1, 2);
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode departemen baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya D 
$huruf = "K";
$kodeKategori = $huruf . sprintf("%02s", $urutan);

echo $kodeKategori;

?>