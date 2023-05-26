<?php
session_start();

// Periksa apakah pengguna sudah login dengan level mahasiswa
if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'mahasiswa') {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

// Ambil informasi mahasiswa dari session
$username = $_SESSION['username'];

// Tampilkan halaman mahasiswa
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <!-- Tampilkan navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">E-Learning</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="halaman_mahasiswa.php">Beranda</a></li>
                <li><a href="materi.php">Data Pribadi</a></li>
                <li><a href="materi.php">Jadwal Kuliah</a></li>
                <li><a href="materi.php">Absensi</a></li>
                <li><a href="materi.php">Materi</a></li>
                <li><a href="tugas.php">Tugas</a></li>
                <li><a href="materi.php">Quiz</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <p class="navbar-text navbar-right">mahasiswa <?php echo $username; ?></p>
        </div>
    </nav>

    <!-- Tampilkan konten halaman mahasiswa -->
    <div class="container">
    <h1>Selamat datang, <?php echo $username; ?></h1>
        <p>Ini adalah halaman mahasiswa.</p>
        <!-- Tambahkan konten atau komponen lainnya sesuai kebutuhan -->

        <!-- Tampilkan data atau komponen dashboard mahasiswa -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard Mahasiswa</h3>
            </div>
            <div class="panel-body">
                <!-- Tambahkan konten dashboard mahasiswa di sini -->
                <p>Ini adalah halaman dashboard mahasiswa.</p>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript atau file eksternal lainnya -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
