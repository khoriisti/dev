<?php

include "config/koneksi.php";

/*

$hari_ini=date("Y-n-j");
$query="SELECT kd_barang FROM tb_barang LIMIT 1";
$result=mysqli_query($query);

if(mysql_num_rows($result)>0)
{
	$row=mysql_fetch_array($result);
	$antrian=$row['antrian'];
	$query="UPDATE tb_antrian set antrian=antrian+1 WHERE tanggal='$hari_ini' LIMIT 1";
	mysql_query($query) or die(mysql_error());
}
else
{
	$antrian=1;
	$query="INSERT INTO tb_antrian(tanggal,antrian) VALUES('$hari_ini',1)";
	mysql_query($query) or die(mysql_error());
}

$kd_barang=$row['kd_barang'];

if(strlen($kd_barang)<2) $kd_barang="0".$kd_barang;
echo $hari_ini;
echo "<h1>Nomor Antrian : ".$kd_barang."</h1>";

*/

 
// mengambil data barang dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(kd_barang) as kodeTerbesar FROM tb_barang");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
 
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 1, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "B";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
echo $kodeBarang;

?>