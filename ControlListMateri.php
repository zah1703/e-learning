<?php 
session_start();
// koneksi database
include '../koneksi.php';
// $uploadDir = 'img/';
// menangkap data yang di kirim dari form

if (isset($_POST['submit'])) {
	$dosen = $_SESSION['user_id'];
	$judul= $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$file = $_FILES['data']['name'];

	// echo $namaFileBaru;;
	$query = "INSERT INTO list_materi values('','$dosen','$judul','$deskripsi','$file')";
	$q = mysqli_query($koneksi,$query);
	// print_r($q);
	header('location: ../view/admin/input_materi.php');
}

?>