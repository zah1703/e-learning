<!DOCTYPE html>
<html>
<head>
    <title>Input Materi</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<body>
        <div class="container">

<h4 style="text-align: center;">INPUT MATERI MAHASISWA</h4>
<br/>
<a href="dashboard.php" class="btn btn-danger">KEMBALI</a>
<br><br>

    <form method="post" action="../../controller/ControlListMateri.php" enctype="multipart/form-data">
        <table class="table">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" class="form-control"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" class="form-control"></td>
        </tr>
        <tr>
            <td>File</td>
            <td><input type="file" name="data"></td>
        </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
          
    </table>
    <!-- <table>
        <tbody>
            <?php 
            include '../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM `list_materi` WHERE 1 ");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
                <td><?php echo $d['file']; ?></td>
                <td>
                    <img style="width: 100px;" src="../../img/<?php echo $d['file'];?>">
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
    </table> -->

    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>


    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
