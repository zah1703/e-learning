<?php
include 'koneksi.php';

// Memeriksa apakah form telah disubmit
if (isset($_POST['nama_tugas']) && isset($_FILES['file_tugas'])) {
    $nama_tugas = $_POST['nama_tugas'];
    $nilai = $_FILES['nilai']['name'];
    $file_tugas = $_FILES['file_tugas']['name'];
    $file_tmp = $_FILES['file_tugas']['tmp_name'];

    // Memindahkan file yang diunggah ke direktori tujuan
    move_uploaded_file($file_tmp, "tujuan/" . $file_tugas);

    // Menyimpan informasi tugas ke dalam database
    $sql = "INSERT INTO tugas1 (nama_tugas, file_tugas, nilai) VALUES ('$nama_tugas', '$file_tugas', '$nilai')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Tugas berhasil diupload.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<?php 
session_start();
include 'koneksi.php';
if(!isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA KELAS 1 D3 IT A</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>

	</style>
</head>
<body>
	<div class="container-fluid">
		<h4 class="text-center">Tambahkan Tugas</h4>
		<br/>
		<a href="input_tugas.php" class="btn btn-primary">+ INPUT TUGAS</a>
		<a href="logout.php" class="btn btn-danger">LOGOUT</a>
		<br/>
		<br/>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Tugas</th>
					<th>Deskripsi</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM `tugas1` WHERE 1");
				while($d = mysqli_fetch_array($data)){
				?>
				<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_tugas']; ?></td>
						<td><?php echo $d['Deskripsi']; ?></td>
		                
						<td>
							<a href="hapus.php?id_tugas1=<?php echo $d['id']; ?>" class="btn btn-danger">HAPUS</a>
						</td>
						
					</tr>
				<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>









