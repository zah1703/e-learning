<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA KELAS 1 D3 IT A</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center">SUBMIT TUGAS</h2>
    <br />
    <br>
    <br />
    <br />
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Opsi</th>

            </tr>
        </thead>
        <tbody>
            <?php 
            include '../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM list_tugas");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
       
                <td>
                    <a class="btn btn-warning mb-2" href="tugas.php?id=<?php echo $d['id']; ?>">SUBMIT</a>
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
