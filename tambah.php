<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<!-- Tambahkan link CSS Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

<div class="container">

	<h2 style="text-align: center;">INPUT DATA MAHASISWA</h2>
	<br/>
	<a href="index.php" class="back">KEMBALI</a>
	<br><br>

	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table class="table table-striped">
			<tr>
				<td>NRP</td>
				<td><input type="text" name="NRP" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" class="form-control"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="Jenis_Kelamin" value="Laki-Laki" id="Jenis_Kelamin1">
						<label class="form-check-label" for="Jenis_Kelamin1">Laki-Laki</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="Jenis_Kelamin" value="Perempuan" id="Jenis_Kelamin2">
						<label class="form-check-label" for="Jenis_Kelamin2">Perempuan</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select name="Jurusan" class="form-control">
						<option value="-">- Pilih Jurusan -</option>
						<option value="Teknik Komputer">Teknik Komputer</option>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						<option value="Teknik Elektro Industri">Teknik Elektro Industri</option>
						<option value="Teknik Rekayasa Multimedia">Teknik Rekayasa Multimedia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Email Student</td>
				<td><input type="text" name="Email_Student" class="form-control"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" class="form-control"></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="No_Hp" class="form-control"></td>
			</tr>
			<tr>
				<td>Asal SMA</td>
				<td><input type="text" name="Asal_SMA" class="form-control"></td>
			</tr>
			<tr>
				<td>Matkul Favorit</td>
				<td><input type="text" name="Matkul_Favorit" class="form-control"></td>
			</tr>
			<tr>

			 	<td>Gambar</td>
				<td><input type="file" name="Gambar" id="Gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>