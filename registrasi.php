<?php 
require 'koneksi.php';

function register($data) {
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$cpassword = mysqli_real_escape_string($koneksi, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $cpassword ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO admin VALUES('', '$username', '$password', '')");

	return mysqli_affected_rows($koneksi);

}

if(isset($_POST['register'])) {
    if(register($_POST) > 0){
        echo "<script>alert('user baru berhasil ditambahkan')</script>";
    } else {
        echo mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<!-- tambahkan link CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<div class="container">

	<h1 class="text-center">Halaman Registrasi</h1>

	<form action="" method="post">

		<ul class="list-group mb-3">
			<li class="list-group-item">
				<label for="username">Username :</label>
				<input type="text" name="username" id="username" class="form-control">
			</li>
			<li class="list-group-item">
				<label for="password">Password :</label>
				<input type="password" name="password" id="password" class="form-control">
			</li>
			<li class="list-group-item">
				<label for="password2">Konfirmasi Password :</label>
				<input type="password" name="password2" id="password2" class="form-control">
			</li>
			<li class="list-group-item">
				<button type="submit" name="register" class="btn btn-primary">Register!</button>
			</li>
		</ul>
		<p>Sudah punya akun? <a href="login.php">Login</a></p>
	</form>
</div>

<!-- tambahkan link script Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
