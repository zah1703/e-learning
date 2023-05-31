<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// update data di database
$query = "UPDATE  `list_tugas`SET `judul`='$judul', `deskripsi`='$deskripsi' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

// cek query execution
if ($result) {
    // redirect to the desired page
    header("location:../view/admin/tambah_tugas.php");
} else {
    // handle the error, you can display an error message or log the error
    echo "Error: " . mysqli_error($koneksi);
}
?>
