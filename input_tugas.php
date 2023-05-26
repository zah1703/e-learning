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
		$data = mysqli_query($koneksi, "select * from input_tugas where id = '$id'");
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
					<td>Nama Tugas</td>
					<td><input type="varchar" name="Nama" class="form-control" value="<?php echo $d['nama_tugas']; ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="deskripsi" class="form-control" value="<?php echo $d['deskripsi']; ?>"></td>
					
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
