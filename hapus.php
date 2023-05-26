<?php 
// koneksi database
include 'koneksi.php';
 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($koneksi,"DELETE FROM `baru` WHERE id='$id'");
    header("location:index.php");
    
}

if(isset($_GET['id_tugas1'])){
    $id_tugas = $_GET['id_tugas1'];
    mysqli_query($koneksi,"DELETE FROM `tugas1` WHERE id='$id_tugas'");
    header("location:tugas1.php");

}
// menangkap data id yang di kirim dari url
 

 
// menghapus data dari database
// mengalihkan halaman kembali ke index.php
 
?>