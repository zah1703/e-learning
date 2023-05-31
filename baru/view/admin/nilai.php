<?php
session_start();
if ($_SESSION['level'] == 'mahasiswa') {
    echo 'Eror Pokoknya';
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>NILAI TUGAS MAHASISWA</title>
    <!-- Menyertakan file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2 style="text-align: center;">NILAI MAHASISWA</h2>
    <br/>
    <h4>0/100</h4>
    <br/>

    <?php
    include '../../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM tugas where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="../../controller/ControlNilai.php" enctype="multipart/form-data">
        <table class="table">
            <!-- delete -->
            <table>
                <tr>
                    <td>Nilai</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="number" name="nilai" class="form-control" value="<?php echo $d['nilai']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="SIMPAN" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
