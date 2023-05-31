<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location: ../view/login.php");
    exit;
}
if ($_SESSION['level'] == 'dosen') {
    echo 'Eror Pokoknya';
    exit;
}
include '../../koneksi.php';
$q = mysqli_query($koneksi,"SELECT * FROM list_tugas WHERE dosen_id=1");
$task = mysqli_fetch_object($q);
?>
<!DOCTYPE html>
<html>

<head>
    <title>TUGAS MAHASISWA KELAS 1 D3 IT A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
    h2 {
      text-align: center;
  }

</style> -->
</head>

<?php include('navbar.php'); ?>

<body>
    <div style="width: 90%; margin-left: auto; margin-right: auto; margin-top : 7%">
        <div class="container">
            <h1 class="mb-5">Kirim Tugas</h1>
            <form action="../../controller/ControlTugas.php" method="post" enctype="multipart/form-data">
                File
                <input type="file" name="file" id="fileToUpload">
                <input type="hidden" name="list_tugas_id" value="<?php echo $task->id;?>">
                <input type="submit" value="SIMPAN" name="submit">
            </form>

            <div> 
                <?php 
                    $q = mysqli_query($koneksi,"SELECT * FROM list_tugas WHERE 1");
                    $m = mysqli_fetch_object($q);

                    echo "JUDUL TUGAS : ".$m->judul."<br>";
                    echo "Deskripsi : ".$m->deskripsi;
                   
                ?>
            </div>

            <h1 class="mt-4">Tugas Terkirim</h1>

            <table class="table table-striped mt-5">
                <tr>
                    <th>No</th>
                    <th>Tugas</th>
                    <th>Ukuran</th>
                    <th>Download</th>
                    <th>Nilai</th>
                  
                </tr>

                <?php 
        // include 'koneksi php';
          include '../../koneksi.php';
          $no = 1;
          $data = mysqli_query($koneksi, "SELECT * FROM tugas");
          while($d = mysqli_fetch_array($data)){
              ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['name']; ?></td>
                    <td><?php echo $d['size']; ?></td>
                    <td>
                        <a class="btn btn-warning mb-2"
                            href="../../controller/ControlDownload.php?file=<?php echo $d['name']; ?>">Download</a>
                    </td>
                    <td><?php if($d['nilai'] == 0) {
                        echo 'Belum di Nilai / 0'; 
                     } else {
                        echo $d['nilai'];
                     }?></td>
                  
                </tr>
                <?php }?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>