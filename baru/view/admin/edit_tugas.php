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
    <title>EDIT TUGAS</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h2 style="text-align: center;">EDIT TUGAS </h2>
    <br/>
    <a href="index.php" class="btn btn-danger">KEMBALI</a>
    <br><br>

    <?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM list_tugas where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
    <form method="post" action="../../controller/ControlEditTugas.php" enctype="multipart/form-data">
        <!-- delete -->
        <table class="table">

            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $d['judul']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" value="SIMPAN"  class="btn btn-primary"></td>
        </tr>
        </tr>

    </table>
    </form>
    <?php 
    }
    ?>

</body>

</html>
