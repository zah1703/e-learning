<nav class="navbar bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-dark navbar-toggler-white" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white" href="index.php">
            <img src="../../img/logo-php.svg" alt="Logo" width="70" height="50"
                class="d-inline-block align-text-center">
            <img src="../../img/logo-mysql.svg" alt="Logo" width="70" height="50"
                class="d-inline-block align-text-center">
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-primary text-white">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
                <hr>
                <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <?php
                    // session_start(); 
                    if($_SESSION['level'] == 'mahasiswa') {
                        ?>
                     <li class="nav-item">
                        <a class="nav-link" href="materi.php">Materi</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tugas.php">Tugas</a>
                        <hr>
                    </li>
                    <?php } ?>
                    <?php
                    if($_SESSION['level'] == 'dosen') {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="v_mahasiswa.php">Data Mahasiswa</a>
                        <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="input_materi.php">Materi</a>
                        <hr>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_tugas.php">Data Tugas</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="v-nilai.php">Nilai</a>
                        <hr>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>