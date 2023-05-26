<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Jurusan = $_POST['Jurusan'];
$Email_Student = $_POST['Email_Student'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$Asal_SMA = $_POST['Asal_SMA'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['Gambar']['name'];
$ukuran = $_FILES['Gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (in_array($ext, $ekstensi) && $ukuran < 2000000) { // check if file extension is allowed and file size is less than 2MB
    $xx = $rand . '_' . $filename;
    move_uploaded_file($_FILES['Gambar']['tmp_name'], 'file/' . $xx); // move uploaded file to file directory
    mysqli_query($koneksi, "UPDATE baru SET NRP='$NRP', Nama='$Nama', Jenis_Kelamin='$Jenis_Kelamin', Jurusan='$Jurusan', Email_Student='$Email_Student', Alamat='$Alamat', No_Hp='$No_Hp', Asal_SMA='$Asal_SMA', Matkul_Favorit='$Matkul_Favorit', Gambar='$xx' WHERE id = '$id'");
    header("location:index.php");
} else {
    header("location:edit.php");
}