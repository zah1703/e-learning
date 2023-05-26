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
		<h2 class="text-center">DATA MAHASISWA KELAS 1 D3 IT A</h2>
		<br/>
		<a href="tambah.php" class="btn btn-primary">+ INPUT DATA MAHASISWA</a>
		<a href="logout.php" class="btn btn-danger">LOGOUT</a>
		<br/>
		<br/>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Jurusan</th>
					<th>Email Student</th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th>Asal SMA</th>
					<th>Matkul Favorit</th>
					<th>Gambar</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM `baru` WHERE 1");
				while($d = mysqli_fetch_array($data)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['NRP']; ?></td>
						<td><?php echo $d['Nama']; ?></td>
		                <td><?php echo $d['Jenis_Kelamin']; ?></td>
						<td><?php echo $d['Jurusan']; ?></td>
						<td><?php echo $d['Email_Student']; ?></td>
						<td><?php echo $d['Alamat']; ?></td>
						<td><?php echo $d['No_Hp']; ?></td>
						<td><?php echo $d['Asal_SMA']; ?></td>
						<td><?php echo $d['Matkul_Favorit']; ?></td>
						<td><img src="<?php echo"file/" . $d['Gambar']; ?>" width="80"></td>
						<td>
							<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success">EDIT</a>
							<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">HAPUS</a>
							<a href="download.php?filename=<?php echo $d['Gambar']; ?>" class="btn btn-primary">DOWNLOAD</a>
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









