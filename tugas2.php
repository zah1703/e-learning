<?php
	session_start();

	if( !isset($_SESSION["login"]) ) {
		header("Location: login.php");
		exit;
	}
	require 'functions1.php';
	$mahasiswa = query("SELECT * FROM matakuliah");
	?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-6.4/css/all.css">
    <title>DASHBOARD</title>
    <style>
      .nav-link:hover{
        background-color: #A4D0A4;
}

      .display-4{
          font-weight: bold;
      }

      .card-body-icon{
        position: absolute;
        z-index:0;
        top:65px;
        right:10px;
        opacity: 0.4;
        font-size:100px;
    }

    .max-auto {
        margin: 0 auto;
        width: 80%;
    }
    
    table {
        margin: 0 auto;
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #e8e8e8;
    }

    .text-center {
        text-align: center;
        margin-top: 60px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-success {
        background-color: #28a745;
    }

</style>

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#"><b>SAINDATIKA</b> | EEPIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Daftar Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matkul.php">Daftar Tugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jadwal Kuliah</a>
      </li>
    </ul>
    <form class="form-inline ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
      <div class="icon ml-4">
        <h5>
        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        <a href="logout.php">
        <i class="fas fa-arrow-right-from-bracket mr-3 text-dark" data-toggle="tooltip" title="Sign Out"></i>
        </a>
        </h5>
      </div>
  </div>
</nav> 
  

<div class="max-auto">
    <h1 class="text-center">Daftar Tugas Mahasiswa</h1>
	<br>
    <a class="btn btn-success" href="tambah_tgs.php">TAMBAH TUGAS</a>
    <div class="text-center"><!DOCTYPE html>
	<br>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Judul Tugas</th>
            <th scope="col">Deadline</th>
            <th scope="col">Detail</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;?>
            <?php foreach ($mahasiswa as $m):?> 
            <tr>
                <td><?= $no; ?>
                <td><?php echo $m['Mata_kuliah']; ?></td>
                <td><?php echo $m['Judul_tugas']; ?></td>
                <td><?php echo $m['Deadline']; ?></td>
                <td>
                <?php if (!empty($m['Detail'])): ?>
                    <span style="color: green;">Sudah mengumpulkan</span>
                <?php else: ?>
                    <span style="color: red;">Belum Mengumpulkan</span>
                <?php endif; ?>

            </td>
                <td>
                <a href="unduh.php?Detail=<?php echo $m['Detail']; ?>">
                <i class="fa-solid fa-download" data-toggle="tooltip" title="Download"></i></a>
                <a href="detail.php?id=<?php echo $m['No']; ?>">
                    <i class="fa-sharp fa-solid fa-bars-progress" data-toggle="tooltip" title="Upload"></i>
                </a>
                    </td>
                </tr>
            <?php $no++; endforeach;?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>