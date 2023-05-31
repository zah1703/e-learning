<!DOCTYPE html>
<html>

<head>
    <title>Input Tugas</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<div class="container">

    <h4 style="text-align: center;">INPUT TUGAS MAHASISWA</h4>
    <br/>
    <a href="dashboard.php" class="btn btn-danger">KEMBALI</a>
    <br><br>
 
    <form method="post" action="../../controller/ControlListTugas.php" enctype="multipart/form-data">
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
