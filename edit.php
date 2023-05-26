<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA MAHASISWA</title>
	<!-- Memanggil Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 
	<h2 style="text-align: center;">EDIT DATA MAHASISWA</h2>
	<br/>
	<a href="index.php" class="btn btn-primary">KEMBALI</a> 
	<br><br>

	<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from baru where id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>NRP</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="NRP" class="form-control" value="<?php echo $d['NRP']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="Nama" class="form-control" value="<?php echo $d['Nama']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="Jenis_Kelamin" class="form-control" value="<?php echo $d['Jenis_Kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="Jurusan" class="form-control" value="<?php echo $d['Jurusan']; ?>"></td>
				</tr>
				<tr>
					<td>Email Student</td>
					<td><input type="text" name="Email_Student" class="form-control" value="<?php echo $d['Email_Student']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" class="form-control" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><input type="text" name="No_Hp" class="form-control" value="<?php echo $d['No_Hp']; ?>"></td>
				</tr>
				<tr>
					<td>Asal SMA</td>
					<td><input type="text" name="Asal_SMA" class="form-control" value="<?php echo $d['Asal_SMA']; ?>"></td>
				</tr>
				<tr>
					<td>Matkul Favorit</td>
					<td><input type="text" name="Matkul_Favorit" class="form-control" value="<?php echo $d['Matkul_Favorit']; ?>"></td>
				</tr>
				<tr>
					<td for ="Gambar">Gambar</td>
					<td><input type="file" name="Gambar" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><img src="<?php echo"file/" . $d['Gambar']; ?>" width="80"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn"></td>
		</tr>
		</tr>

		</table>
		</form>
		<?php
		}
		?>

	</body>

	</html>