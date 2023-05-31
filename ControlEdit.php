<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
// $Nama = $_POST['Nama'];
// $NRP = $_POST['NRP'];
// $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
// $Jurusan = $_POST['Jurusan'];
// $Email = $_POST['Email'];
// $Alamat = $_POST['Alamat'];
// $No_Hp = $_POST['No_Hp'];
// $Asal_SMA = $_POST['Asal_SMA'];
// $Matkul_Favorit = $_POST['Matkul_Favorit'];
 
	$NRP = $_POST['NRP'];
	$Nama = $_POST['Nama'];
	$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
	$Jurusan = $_POST['Jurusan'];
	$Email = $_POST['Email'];
	$Alamat = $_POST['Alamat'];
	$No_Hp = $_POST['No_Hp'];
	$Asal_SMA = $_POST['Asal_SMA'];
	$Matkul_Favorit = $_POST['Matkul_Favorit'];
	// $file = $_FILES['foto'];

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];


    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
	if ($error === 4) {
		echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
		return false;
	}

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
	$extValid = ['jpg', 'jpeg', 'png'];
	$ext = explode('.', $namaFile);
	$ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
	if (!in_array($ext, $extValid)) {
		echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
		return false;
	}

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
	if ($ukuranFile > 3000000) {
		echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
		return false;
	}

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
	move_uploaded_file($tmpName, '../img/' . $namaFileBaru);


// update data ke database
mysqli_query($koneksi,"update db_mahasiswa set Nama='$Nama', NRP='$NRP',Jenis_Kelamin='$Jenis_Kelamin', Jurusan='$Jurusan',Email='$Email',Alamat='$Alamat', No_Hp='$No_Hp',Asal_SMA='$Asal_SMA', Matkul_Favorit='$Matkul_Favorit',Foto='$namaFileBaru' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../view/admin/v_mahasiswa.php");
 
?>