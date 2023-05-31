<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA KELAS 1 D3 IT A</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center">DATA MAHASISWA KELAS 1 D3 IT A</h2>
    <br/>
    <a href="dashboard.php">KEMBALI</a>
    <br><br>
    <a class="btn btn-primary" href="tambah.php">+ INPUT DATA MAHASISWA</a>
    <br>
    <br/>
    <br/>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Asal SMA</th>
                <th scope="col">Matkul Favorit</th>
                <th scope="col">Foto</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include '../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM db_mahasiswa");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $d['NRP']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Jenis_Kelamin']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
                <td><?php echo $d['Email']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['No_Hp']; ?></td>
                <td><?php echo $d['Asal_SMA']; ?></td>
                <td><?php echo $d['Matkul_Favorit']; ?></td>
                <td>
                    <img style="width: 100px;" src="../../img/<?php echo $d['Foto'];?>">
                </td>
                <td>
                    <a class="btn btn-warning mb-2" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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
