<?php 
$koneksi = mysqli_connect("localhost", "root", "", "itprojec_db");

if (mysqli_connect_errno()) {
	echo "Koneksi gagal".mysqli_connect_error();
}
 ?>