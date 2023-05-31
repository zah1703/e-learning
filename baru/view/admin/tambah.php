<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA MAHASISWA</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
<div class="container">

    <h2 style="text-align: center;">INPUT DATA MAHASISWA</h2>
    <br/>
    <a href="v_mahasiswa.php" class="btn btn-danger">KEMBALI</a>
    <br><br>

    <form method="post" action="../../controller/ControlTambah.php" enctype="multipart/form-data">
      <table class="table">
            <tr>
                <td>NRP</td>
                <td><input type="number" name="NRP" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td><input type="text" name="Jenis_Kelamin" class="form-control"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" class="form-control"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="number" name="No_Hp" class="form-control"></td>
            </tr>
            <tr>
                <td>Asal SMA</td>
                <td><input type="text" name="Asal_SMA" class="form-control"></td>
            </tr>
            <tr>
                <td>Matkul Favorit</td>
                <td><input type="text" name="Matkul_Favorit" class="form-control"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" value="Upload" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name=submit value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>

  
    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
