<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM list_tugas WHERE id='$id'");
 
// mengalihkan halaman kembali ke tambah_tugas.php
header("location:tambah_tugas.php");
 
?>