<?php
// session_start();
if ($_SESSION['level'] == 'mahasiswa') {
    echo 'Eror Pokoknya';
    exit;
}
?>
<h1 class="mt-4">Kumpulan Tugas</h1>

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
            ?>
            <a class="btn btn-warning mb-2" href="nilai.php?id=<?php echo $d['id']; ?>">Belum di Nilai</a>
            <?php
                     } else {
                        ?>
            <a class="btn btn-warning mb-2" href="nilai.php?id=<?php echo $d['id']; ?>"><?php echo $d['nilai']; ?></a>
            <?php

            }?>

        </td>
      
    </tr>
    <?php }?>
    </div>
    </div>