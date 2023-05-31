<?php

// $files = $_FILES;
if (isset($_POST['submit'])) {
    if ($_FILES['file']['name'] == '') {
        echo ' Uploud File Dulu';
        exit;
    }
echo "<pre>";
$js = json_encode($_FILES, JSON_PRETTY_PRINT);
print_r($js);
echo "</pre>";
    $list_tugas_id = $_POST['list_tugas_id'];
	$namaFile = $_FILES['file']['name'];
	$ukuranFile = $_FILES['file']['size'];
	$error = $_FILES['file']['error'];
    $type = $_FILES['file']['type'];
	$tmpName = $_FILES['file']['tmp_name'];
    $nilai = 0;

    move_uploaded_file($tmpName, '../storage/' . $namaFile);
include('../koneksi.php');
	// echo $namaFileBaru;
	$query = "INSERT INTO tugas (id, name, tmp_name, type, size, list_tugas_id) VALUES ('', '$namaFile', '$tmpName', '$type', '$ukuranFile', '$list_tugas_id')";
	mysqli_query($koneksi,$query);
    header('location: ../view/admin/tugas.php');
}