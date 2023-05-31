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
    <title>Data Tugas</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <h2 class="text-center">DATA MATERI</h2>
    <br/>
    <a href="dashboard.php" class="btn btn-danger">KEMBALI</a>
    <br><br>
    <a class="btn btn-primary" href="input_tugas.php">+ INPUT MATERI</a>
    <br>
    <br/>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">File</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // include 'koneksi php';
            include '../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM list_tugas");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td><?php echo $d['file']; ?></td>
                    <td>
                        <a class="btn btn-warning mb-2" href="edit_tugas.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a class="btn btn-danger" href="hapus_tugas.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>

    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
