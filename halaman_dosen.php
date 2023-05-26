<?php
session_start();

// Periksa apakah pengguna sudah login dengan level dosen
if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'dosen') {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

// Ambil informasi dosen dari session
$username = $_SESSION['username'];

// Tampilkan halaman dosen
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
       <!-- Tambahkan link CSS untuk Bootstrap -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Tambahkan link CSS untuk Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nav-link:hover {
            background-color: grey;
        }
        .display-4 {
            font-weight: bold;
        }
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 4px;
            opacity: 0.4;
            font-size: 90px;
            font-size: 90px;
        }
        body{
            background-color: #9DB2BF;
        }
        .navbar{
            background-color: #27374D;
        }
    </style>
</head>
<body>
    <!-- Tampilkan navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">E-Learning</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Data Mahasiswa</a></li>
                    <li><a href="materi.php">Materi</a></li>
                    <li><a href="tugas1.php">Tugas</a></li>
                    <li><a href="pengumpulan.php">Data Pengumpulan Tugas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tampilkan konten halaman dosen -->
    <div class="container">
        <h1>Selamat datang, <?php echo $username; ?></h1>
        <!-- Tambahkan konten atau komponen lainnya sesuai kebutuhan -->

        <!-- Tampilkan data atau komponen dashboard dosen -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard Dosen</h3>
            </div>
            <div class="panel-body">
                <!-- Tambahkan konten dashboard dosen di sini -->
                <p>Ini adalah halaman dashboard dosen.</p>
            </div>
        </div>
    </div>
  
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col">
                <div class="" style="display: flex; justify-content: start;">
                    <div class="card bg-info" style="width: 30rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">Matematika</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">149</div>  
                                        
                                        <i class="fas fa-user-graduate"></i> 
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>
                    <!-- batas suci -->
                    <div class="card bg-info " style="width: 30rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">WPW</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">105</div>  
                                        
                                        <i class="fas fa-user-graduate"></i>
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>

                    <div class="card bg-info " style="width: 30rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">Basis Data</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">112</div>  
                                        
                                        <i class="fas fa-user-graduate"></i>
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>
                    <div class="card bg-info " style="width: 30rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">ASD</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">150</div>  
                                        
                                        <i class="fas fa-user-graduate"></i>
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>
                    <div class="card bg-info " style="width: 30rem; height: 20rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">Sistem Operasi</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">130</div>  
                                        
                                        <i class="fas fa-user-graduate"></i>
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>
                    <div class="card bg-info " style="width: 30rem; padding: 5px; margin: 10px;">
                            <div class="card-body">
                                <h5 class="card-title m-5" style="text-align: center; font-family: Times New Roman;">KWN</h5>
                                    <div style="display:flex; flex-direction:row; justify-content: space-between; margin: 5px;">
                                        <div class="m-5" style="font-weight: bold; font-size: 150%;">135</div>  
                                        
                                        <i class="fas fa-user-graduate"></i>
                                        
                                    </div>
                                    <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-solid fa-angles-right ml-2"></i></p></a>
                            </div>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- <div class="col-md-4">
            <div class="card">
                <img src="image3.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">This is the content of card 3.</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Tambahkan script JavaScript atau file eksternal lainnya -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
