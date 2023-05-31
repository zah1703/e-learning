<?php 
// koneksi database
include '../koneksi.php';
// $uploadDir = 'img/';
// menangkap data yang di kirim dari form

if (isset($_POST['submit'])) {

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

	// echo $namaFileBaru;;
	$query = "insert into db_mahasiswa values('','$NRP','$Nama','$Jenis_Kelamin','$Jurusan','$Email','$Alamat','$No_Hp','$Asal_SMA','$Matkul_Favorit','$namaFileBaru')";
	mysqli_query($koneksi,$query);
	header('location: ../view/admin/dashboard.php');
}

?>