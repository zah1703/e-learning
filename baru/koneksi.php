<?php 
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database berhasil : " .  mysqli_connect_error();
}

?>