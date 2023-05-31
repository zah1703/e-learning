<?php
session_start();
if (!($_SESSION['level'] == 'dosen')) {
    echo 'Eror Pokoknya';
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DATA MAHASISWA</title>
     <!-- Add Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">

    <h2 style="text-align: center;">EDIT DATA MAHASISWA </h2>
    <br />
    <a href="v_mahasiswa.php" class="btn btn-danger">KEMBALI</a>
    <br/>
    <br/>

    <?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

    <form method="post" action="../../controller/ControlEdit.php" enctype="multipart/form-data">
        <!-- delete -->
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="Nama" class="form-control" value="<?php echo $d['Nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NRP</td>
                <td><input type="number" name="NRP" class="form-control" value="<?php echo $d['NRP']; ?>"></td>
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
                <td>Email</td>
                <td><input type="email" name="Email" class="form-control" value="<?php echo $d['Email']; ?>"></td>
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
                <td>Foto</td>
                <td><input type="file" name="foto" class="form-control" value="Upload"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name= "submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
        <!-- Add Bootstrap JS and jQuery (optional) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <?php 
	}
	?>

</body>

</html>